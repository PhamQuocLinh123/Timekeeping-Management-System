<?php
require_once 'include/entryPoint.php';
require_once 'include/utils.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

// Lấy ID của bảng sgt_tonghopchamcong từ tham số
$recordId = $_REQUEST['record'];
// Lấy đối tượng BeanFactory
$bean = BeanFactory::getBean('sgt_tonghopchamcong', $recordId);

if (!$bean) {
    die("Không tìm thấy bản ghi.");
}

// Lấy thông tin dự án và khoảng thời gian
$duanid = $bean->sgt_duan_id_c;
$tungay = DateTime::createFromFormat('d/m/Y', $bean->tungay)->format('Y-m-d');
$denngay = DateTime::createFromFormat('d/m/Y', $bean->denngay)->format('Y-m-d');

// Tạo đối tượng DateTime từ tungay để lấy thông tin tháng và năm
$startDate = DateTime::createFromFormat('Y-m-d', $tungay);

// Lấy năm và tháng từ tungay
$year = $startDate->format('Y');
$month = $startDate->format('m');

// Tính số ngày trong tháng của tungay
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// Tạo một mảng chứa các ngày từ 1 đến số ngày trong tháng của tungay
$allDays = range(1, $daysInMonth);

// Truy vấn SQL để lấy dữ liệu từ bảng sgt_dschamcong
$query = "SELECT 
            nv.ma_nv, 
            nv.name, 
            nv.chucvu,
            dc.ngaychamcong,
            duan.name AS duan_name,
            dc.tonggiolam,
            dc.loaingay
          FROM sgt_dschamcong dc
          JOIN sgt_nhanvien nv ON dc.ma_nv = nv.ma_nv
          JOIN sgt_duan duan ON dc.sgt_duan_id_c = duan.id
          WHERE dc.sgt_duan_id_c = '".$duanid."' 
            AND dc.ngaychamcong BETWEEN '".$tungay."' AND '".$denngay."'
          ORDER BY nv.ma_nv, dc.ngaychamcong";

// Thực hiện truy vấn
$result = $bean->db->query($query);

if ($bean->db->getRowCount($result) === 0) {
    die("Không có dữ liệu phù hợp.");
}

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
// Thiết lập font chữ Times New Roman cho toàn bộ sheet
$fontStyle = [
    'font' => [
        'name' => 'Times New Roman',
        'size' => 13
    ]
];

// Áp dụng font cho toàn bộ sheet
$sheet->getStyle('A1:AO1000')->applyFromArray($fontStyle); // Điều chỉnh phạm vi nếu cần
// Thêm tên công ty
$sheet->setCellValue('A1', 'Đơn vị: Công ty TNHH A SUNG VINA');

// Thêm tiêu đề Bảng Chấm Công với tháng và năm
$sheet->setCellValue('A2', 'BẢNG CHẤM CÔNG Tháng ' . $month . ' Năm ' . $year);

// Định dạng tiêu đề
$titleStyle = [
    'font' => ['time news roman' => true, 'size' => 20],
    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER],
];
$sheet->getStyle('A1')->applyFromArray($titleStyle);
$sheet->getStyle('A2')->applyFromArray($titleStyle);

// Gộp ô để căn giữa tiêu đề
// $columnIndexTotalDays = 'E'; // Cột kế cuối
$sheet->mergeCells('A1:' . 'AN1');
$sheet->mergeCells('A2:' . 'AN2');
// Đặt tiêu đề cột cho tệp Excel
$sheet->setCellValue('A3', 'Mã Nhân Viên');
$sheet->setCellValue('B3', 'Tên Nhân Viên');
$sheet->setCellValue('C3', 'Chức vụ');
$sheet->setCellValue('D3', 'Hành chính / Tăng ca');

// Thêm tiêu đề cho mỗi ngày từ 1 đến số ngày trong tháng
$columnIndex = 'E';
foreach ($allDays as $day) {
    $sheet->setCellValue($columnIndex . '3', $day);
    $columnIndex++;
}

// Thêm tiêu đề cho cột Dự Án, Tổng Giờ Công và Tổng Ngày Công
$sheet->setCellValue($columnIndex . '3', 'Dự Án');
$columntgc = ++$columnIndex;
$sheet->setCellValue($columntgc . '3', 'Tổng Giờ Công');
// $sheet->setCellValue(++$columnIndex . '3', 'Tổng Ngày Công');
$columnIndexTotalDays = ++$columnIndex; // Cột tiếp theo
$songayan = ++$columnIndex; // Cột tiếp theo
$kyten = ++$columnIndex; // Cột tiếp theo
$sheet->setCellValue($columnIndexTotalDays . '3', 'Tổng Ngày Công');
$sheet->setCellValue($songayan . '3', 'Số Ngày Ăn');
$sheet->setCellValue($kyten . '3', 'Ký Tên');
// Điều chỉnh chiều rộng của các cột chứa tiêu đề
$sheet->getColumnDimension($columntgc)->setWidth(20);

$sheet->getColumnDimension($columnIndexTotalDays)->setWidth(20); // Đặt chiều rộng cho cột 'Tổng Ngày Công'
$sheet->getColumnDimension($songayan)->setWidth(20); // Đặt chiều rộng cho cột 'Số Ngày Ăn'
$sheet->getColumnDimension($kyten)->setWidth(20); // Đặt chiều rộng cho cột 'Ký Tên'

// Thêm hàng thứ hai để hiển thị thứ
$columnIndex = 'E';
foreach ($allDays as $day) {
    $date = DateTime::createFromFormat('Y-m-d', "$year-$month-$day");
    $dayOfWeek = $date->format('D'); // Lấy tên ngày trong tuần 
    $sheet->setCellValue($columnIndex . '4', $dayOfWeek);

    // Kiểm tra nếu là Chủ nhật và tô màu nền
    if ($dayOfWeek === 'Sun') { // Chủ nhật
        $sheet->getStyle($columnIndex . '4')->applyFromArray([
            'fill' => ['fillType' => Fill::FILL_SOLID, 'color' => ['rgb' => 'FFCCCC']]
        ]);
    }

    $columnIndex++;
}

// Định dạng tiêu đề cột
$headerStyle = [
    'font' => ['bold' => true],
    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical' => Alignment::VERTICAL_CENTER],
    'fill' => ['fillType' => Fill::FILL_SOLID, 'color' => ['rgb' => 'FFFF00']],
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['rgb' => '000000']
        ]
    ]
];

// Kẻ bảng
$sheet->getStyle('A1:'.$kyten.'3')->applyFromArray($headerStyle);

// Định dạng hàng tiêu đề ngày
$dayHeaderStyle = [
    'font' => ['bold' => true],
    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER, 'vertical' => Alignment::VERTICAL_CENTER],
    'fill' => ['fillType' => Fill::FILL_SOLID, 'color' => ['rgb' => 'D9EAD3']],
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['rgb' => '000000']
        ]
    ]
];
$sheet->getStyle('E2:' . $columnIndex . '4')->applyFromArray($dayHeaderStyle);

// Định dạng ô tổng giờ công
$totalHourStyle = [
    'font' => ['bold' => true],
    'fill' => ['fillType' => Fill::FILL_SOLID, 'color' => ['rgb' => '66FFCC']],
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['rgb' => '000000']
        ]
    ],
    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER]
];

// Định dạng hàng dữ liệu
$dataRowStyle = [
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['rgb' => '000000']
        ]
    ]
];

// Định dạng hàng tổng
$totalRowStyle = [
    'font' => ['bold' => true],
    'fill' => ['fillType' => Fill::FILL_SOLID, 'color' => ['rgb' => 'FFFF00']],
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['rgb' => '000000']
        ]
    ],
    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER]
];

// Gộp các ô từ A1:A2, A3:A4, v.v.
$rowCount = $bean->db->getRowCount($result); // Tổng số hàng dữ liệu
for ($i = 5; $i <= $rowCount * 2 + 4; $i += 2) {
    $sheet->mergeCells('A' . $i . ':A' . ($i + 1));
    $sheet->mergeCells('B' . $i . ':B' . ($i + 1));
    $sheet->mergeCells('C' . $i . ':C' . ($i + 1));
}
$row = 5;
$employeeData = [];

// Xử lý dữ liệu từ truy vấn
// Xử lý dữ liệu từ truy vấn
while ($item = $bean->db->fetchByAssoc($result)) {
    $employeeData[$item['ma_nv']]['name'] = $item['name'];
    $employeeData[$item['ma_nv']]['chucvu'] = $item['chucvu'];
    $employeeData[$item['ma_nv']]['duan_name'] = $item['duan_name'];
    $employeeData[$item['ma_nv']]['dates'][$item['ngaychamcong']] = $item['tonggiolam'];
}

// Ghi dữ liệu vào bảng tính
foreach ($employeeData as $ma_nv => $data) {
    // Hàng cho giờ làm việc (không phân biệt loại ngày)
    $sheet->setCellValue('A' . $row, $ma_nv)
          ->setCellValue('B' . $row, $data['name'])
          ->setCellValue('C' . $row, $data['chucvu'])
          ->setCellValue('D' . $row, 'Giờ Hành Chính');
    
    $columnIndex = 'E';
    $totalHourParts = [];
    foreach ($allDays as $day) {
        $currentDate = DateTime::createFromFormat('d/m/Y', $day . '/' . substr($tungay, 5, 2) . '/' . substr($tungay, 0, 4))->format('Y-m-d');
        $tonggiolam = isset($data['dates'][$currentDate]) ? $data['dates'][$currentDate] : '';
        $sheet->setCellValue($columnIndex . $row, $tonggiolam);

        if ($tonggiolam !== '') {
            $totalHourParts[] = $columnIndex . $row;
        }
        
        // Kiểm tra nếu là Chủ nhật và tô màu nền
        $dayOfWeek = DateTime::createFromFormat('Y-m-d', $currentDate)->format('w');
        if ($dayOfWeek == 0) { // Chủ nhật
            $sheet->getStyle($columnIndex . $row)->applyFromArray([
                'fill' => ['fillType' => Fill::FILL_SOLID, 'color' => ['rgb' => 'FFFF00']]
            ]);
        }

        $columnIndex++;
    }
    // Thêm tên dự án vào cột kế cuối
    $sheet->setCellValue($columnIndex . $row, $data['duan_name']);
    // Thêm công thức tính tổng giờ công vào cột cuối cùng
    if (!empty($totalHourParts)) {
        $totalHourFormula = '=SUM(' . implode(',', $totalHourParts) . ')';
        $sheet->setCellValue(++$columnIndex . $row, $totalHourFormula);
        
        // Định dạng ô tổng giờ công
        $sheet->getStyle($columnIndex . $row)->applyFromArray($totalHourStyle);

        // Cập nhật chỉ số cột cho tổng ngày công
        $totalHourColumn = $columnIndex; // Cột chứa tổng giờ công

        // Thêm công thức tính tổng ngày công vào cột kế tiếp
        $totalDayColumn = ++$columnIndex; // Cột chứa tổng ngày công
        $totalDayFormula = '=' . $totalHourColumn . $row . ' / 8';
        $sheet->setCellValue($totalDayColumn . $row, $totalDayFormula);
        
        // Định dạng ô tổng ngày công
        $sheet->getStyle($columnIndex . $row)->applyFromArray($totalHourStyle);
    }
    // Định dạng hàng
    $sheet->getStyle('A' . $row . ':' . $kyten . $row)->applyFromArray($dataRowStyle);
    $row++;
    // Hàng cho giờ tăng ca
    $sheet->setCellValue('A' . $row, $ma_nv)
          ->setCellValue('B' . $row, $data['name'])
          ->setCellValue('C' . $row, $data['chucvu'])
          ->setCellValue('D' . $row, 'Tăng ca');
    
    $columnIndex = 'E';
    $totalHourParts = [];
    foreach ($allDays as $day) {
        $currentDate = DateTime::createFromFormat('d/m/Y', $day . '/' . substr($tungay, 5, 2) . '/' . substr($tungay, 0, 4))->format('Y-m-d');
        $tangca = isset($data['dates'][$currentDate]['tangca']) ? $data['dates'][$currentDate]['tangca'] : '';
        $sheet->setCellValue($columnIndex . $row, $tangca);

        if ($tangca !== '') {
            $totalHourParts[] = $columnIndex . $row;
        }
        
        // Kiểm tra nếu là Chủ nhật và tô màu nền
        $dayOfWeek = DateTime::createFromFormat('Y-m-d', $currentDate)->format('w');
        if ($dayOfWeek == 0) { // Chủ nhật
            $sheet->getStyle($columnIndex . $row)->applyFromArray([
                'fill' => ['fillType' => Fill::FILL_SOLID, 'color' => ['rgb' => 'FFFF00']]
            ]);
        }

        $columnIndex++;
    }
    // Thêm tên dự án vào cột kế cuối
    $sheet->setCellValue($columnIndex . $row, $data['duan_name']);
    
    // Thêm công thức tính tổng giờ công vào cột cuối cùng
    if (!empty($totalHourParts)) {
        $totalHourFormula = '=SUM(' . implode(',', $totalHourParts) . ')';
        $sheet->setCellValue(++$columnIndex . $row, $totalHourFormula);
        
        // Định dạng ô tổng giờ công
        $sheet->getStyle($columnIndex . $row)->applyFromArray($totalHourStyle);
                // Cập nhật chỉ số cột cho tổng ngày công
        $totalHourColumn = $columnIndex; // Cột chứa tổng giờ công

                // Thêm công thức tính tổng ngày công vào cột kế tiếp
        $totalDayColumn = ++$columnIndex; // Cột chứa tổng ngày công
        $totalDayFormula = '=' . $totalHourColumn . $row . ' / 8';
        $sheet->setCellValue($totalDayColumn . $row, $totalDayFormula);
    }

    // Định dạng hàng
    $sheet->getStyle('A' . $row . ':' . $kyten . $row)->applyFromArray($dataRowStyle);

    $row++;
}
// Định dạng cột
$sheet->getColumnDimension('A')->setWidth(5);
$sheet->getColumnDimension('B')->setWidth(30);
$sheet->getColumnDimension('C')->setWidth(20);
// Tự động điều chỉnh chiều rộng cột theo nội dung
foreach (range('D', $columnIndex) as $columnID) {
    $sheet->getColumnDimension($columnID)->setAutoSize(true);
}
for ($i = 'E'; $i <= ++$columnIndex; $i++) {
    $sheet->getColumnDimension($i)->setWidth(12); // Căn chỉnh chiều rộng cột
}
// Xác định hàng cuối cùng của dữ liệu nhân viên
$totalDataRow = $row - 1; // Vì $row đã tăng sau khi ghi dữ liệu nhân viên
// Đặt tiêu đề tổng vào hàng tổng (hàng ngay sau dữ liệu nhân viên)
$sheet->setCellValue('A' . ($totalDataRow + 2), 'Tổng Tất Cả :')
      ->mergeCells('A' . ($totalDataRow + 2) . ':D' . ($totalDataRow + 2));

// Đặt công thức tổng giờ làm việc vào ô cuối cùng của cột tổng giờ làm việc
$columnIndex = 'AK'; // Cột tổng giờ làm việc
$totalHourFormula = '=SUM(' . $columnIndex . '5:' . $columnIndex . $totalDataRow . ')';
$sheet->setCellValue($columnIndex . ($totalDataRow + 2), $totalHourFormula);

// Định dạng hàng tổng
$sheet->getStyle('A' . ($totalDataRow + 2) . ':' . $columnIndex . ($totalDataRow + 2))->applyFromArray([
    'font' => ['bold' => true],
    'fill' => ['fillType' => Fill::FILL_SOLID, 'color' => ['rgb' => 'FFFF00']],
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['rgb' => '000000']
        ]
    ],
    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER]
]);
// Tự động điều chỉnh kích thước cột
foreach (range('A', $columnIndex) as $columnID) {
    $sheet->getColumnDimension($columnID)->setAutoSize(true);
}
// Xác định hàng cuối cùng của dữ liệu nhân viên
$totalDataRow = $row - 1; // Vì $row đã tăng sau khi ghi dữ liệu nhân viên
// Đặt công thức tổng ngày công vào ô cuối cùng của cột tổng ngày công
$columnIndex = 'AL'; // Cột tổng ngày công
$totalDayFormula = '=SUM(' . $columnIndex . '5:' . $columnIndex . $totalDataRow . ')';
$sheet->setCellValue($columnIndex . ($totalDataRow + 2), $totalDayFormula);

// Định dạng hàng tổng
$sheet->getStyle('A' . ($totalDataRow + 2) . ':' . $columnIndex . ($totalDataRow + 2))->applyFromArray([
    'font' => ['bold' => true],
    'fill' => ['fillType' => Fill::FILL_SOLID, 'color' => ['rgb' => 'FFFF00']],
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['rgb' => '000000']
        ]
    ],
    'alignment' => ['horizontal' => Alignment::HORIZONTAL_CENTER]
]);
// Tự động điều chỉnh kích thước cột
foreach (range('A', $columnIndex) as $columnID) {
    $sheet->getColumnDimension($columnID)->setAutoSize(true);
}
$filename = 'ngay_cham_cong_'.$duanid.'_'.date('Ymd').'.xlsx';
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');  
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');
header('Cache-Control: max-age=1');
// Dọn dẹp bộ đệm đầu ra
ob_clean();
// Tạo và lưu tệp Excel
$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
$writer->save('php://output');

exit;
?>
