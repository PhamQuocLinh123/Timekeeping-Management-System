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
// Kiểm tra nếu recordId có tồn tại
////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////####################################///////////////////////
    global $db;

    // Lấy đối tượng từ BeanFactory dựa vào recordId
    $bean = BeanFactory::getBean('sgt_tonghopchamcong', $recordId);

    // Lấy thông tin từ ngày và đến ngày
    $tungay = DateTime::createFromFormat('d/m/Y', $bean->tungay);
    $denngay = DateTime::createFromFormat('d/m/Y', $bean->denngay);

    // bắt đầu 
    $startMonth = $tungay->format('Y-m-01');
    //kết thúc
    $endMonth = $denngay->format('Y-m-t');

    // Truy vấn dữ liệu nhân viên nghỉ phép có nhà cung cấp là "Asungvina"
    $sql = "SELECT v.*, n.name AS ten_nhan_vien, n.ma_nv
            FROM sgt_vangmat v
            LEFT JOIN sgt_nhanvien n 
            ON CONVERT(v.sgt_nhanvien_id_c USING utf8mb4) = CONVERT(n.id USING utf8mb4)
            WHERE v.lydo = 'nghiphep' 
            AND CONVERT(n.ncc_id_c USING utf8mb4) = 'b1570f1f-fcd0-f896-09d5-66d7c827d87a'
            AND v.deleted = 0
            AND pheduyet = 1
            AND v.tungay <= '$endMonth'
            AND v.denngay >= '$startMonth'";

    $result = $db->query($sql);

    // Tạo file Excel
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();



// Nếu tháng của ngày bắt đầu và ngày kết thúc khác nhau, sử dụng tháng của ngày kết thúc
$monthTitle =date_format($tungay,"m/Y");

// Thêm tiêu đề cho bảng
$sheet->setCellValue('AR1', 'DANH SÁCH NHÂN VIÊN NGHỈ PHÉP tháng ' . $monthTitle);

// Định dạng tiêu đề bảng
$titleStyle = [
    'font' => [
        'bold' => true,
        'size' => 14,
        'color' => ['rgb' => '000000']
    ],
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
        'vertical' => Alignment::VERTICAL_CENTER
    ],
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
        'startColor' => ['rgb' => '66FFCC'] // Màu nền nhẹ
    ]
];

// Áp dụng style cho tiêu đề bảng
$sheet->mergeCells('AR1:BZ1'); // Kết hợp các ô để tiêu đề chiếm toàn bộ chiều rộng
$sheet->getStyle('AR1:BZ1')->applyFromArray($titleStyle);

// Định nghĩa style cho tiêu đề cột
$headerStyle = [
    'font' => [
        'bold' => true,
        'size' => 12,
        'color' => ['rgb' => 'FFFFFF']
    ],
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
        'vertical' => Alignment::VERTICAL_CENTER
    ],
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
        'startColor' => ['rgb' => '4CAF50'] // Màu nền xanh lá
    ],
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['rgb' => '000000'],
        ],
    ]
];

// Định nghĩa style cho dữ liệu
$dataStyle = [
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
        'vertical' => Alignment::VERTICAL_CENTER
    ],
    'borders' => [
        'allBorders' => [
            'borderStyle' => Border::BORDER_THIN,
            'color' => ['rgb' => '000000'],
        ],
    ]
];

// Áp dụng style tiêu đề cho hàng đầu tiên
$sheet->getStyle('AR2:BZ2')->applyFromArray($headerStyle);

// Thiết lập tự động giãn kích thước cho các cột tiêu đề
for ($col = 'AR'; $col !== 'BZ'; $col++) {
    $sheet->getColumnDimension($col)->setAutoSize(true);
}

// Áp dụng tự động giãn kích thước cho các cột ngày từ AU trở đi
for ($col = 47; $col <= $colNumber; $col++) {
    $columnLetter = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::stringFromColumnIndex($col);
    $sheet->getColumnDimension($columnLetter)->setAutoSize(true);
}

// Tạo tiêu đề cho từng ngày từ $startMonth đến $endMonth
$startDate = new DateTime($startMonth);
$endDate = new DateTime($endMonth);
$colNumber = 47; // Bắt đầu từ cột 'AU'
$sheet->setCellValue('AR2' . $rowNumber, 'Tên')
->setCellValue('AS2' . $rowNumber, 'Mã nhân viên')
->setCellValue('AT2' . $rowNumber, 'Tổng số ngày nghỉ')
->setCellValue('BZ2' . $rowNumber, 'Tổng giờ làm ');


while ($startDate <= $endDate) {
    $sheet->setCellValueByColumnAndRow($colNumber, 2, $startDate->format('d/m/Y'));

    $startDate->modify('+1 day');
    $colNumber++;
}

// Mảng để lưu thông tin nhân viên và ngày nghỉ
$employeeData = [];

// Duyệt kết quả và gom dữ liệu nhân viên
while ($row = $db->fetchByAssoc($result)) {
    $ma_nv = $row['ma_nv'];
    $tungayV = new DateTime($row['tungay']);
    $denngayV = new DateTime($row['denngay']);

    // Điều chỉnh $tungayV và $denngayV theo giới hạn tháng hiện tại
    if ($tungayV < new DateTime($startMonth)) {
        $tungayV = new DateTime($startMonth);
    }
    if ($denngayV > new DateTime($endMonth)) {
        $denngayV = new DateTime($endMonth);
    }

    // Nếu nhân viên đã tồn tại trong mảng, gộp thêm ngày nghỉ
    if (isset($employeeData[$ma_nv])) {
        $employeeData[$ma_nv]['totalDays'] += $denngayV->diff($tungayV)->days + 1;
        $employeeData[$ma_nv]['dates'][] = ['tungay' => $tungayV, 'denngay' => $denngayV];
    } else {
        // Thêm nhân viên mới vào mảng
        $employeeData[$ma_nv] = [
            'ten_nhan_vien' => $row['ten_nhan_vien'],
            'ma_nv' => $ma_nv,
            'lydo' => $row['lydo'],
            'totalDays' => $denngayV->diff($tungayV)->days + 1,
            'dates' => [['tungay' => $tungayV, 'denngay' => $denngayV]]
        ];
    }
}

// Đổ dữ liệu từ mảng vào bảng Excel
$rowNumber = 3; // Bắt đầu từ dòng thứ 3

foreach ($employeeData as $data) {
    // Điền thông tin nhân viên vào Excel
    $sheet->setCellValue('AR' . $rowNumber, $data['ten_nhan_vien']);
    $sheet->setCellValue('AS' . $rowNumber, $data['ma_nv']);
    $sheet->setCellValue('AT' . $rowNumber, $data['totalDays']);

    // Áp dụng style cho dữ liệu
    $sheet->getStyle('AR' . $rowNumber . ':BZ' . $rowNumber)->applyFromArray($dataStyle);

    // Đổ dữ liệu nghỉ phép ('P') vào cột tương ứng với ngày nghỉ phép
    $startDate = new DateTime($startMonth);
    $colNumber = 47; // Bắt đầu từ cột 'AU'

    $totalLeaveDays = 0; // Biến để lưu tổng số ngày nghỉ phép

    while ($startDate <= $endDate) {
        $cell = $sheet->getCellByColumnAndRow($colNumber, $rowNumber)->getCoordinate();

        // Kiểm tra nếu $startDate nằm trong bất kỳ khoảng thời gian nào của nhân viên
        foreach ($data['dates'] as $range) {
            if ($startDate >= $range['tungay'] && $startDate <= $range['denngay']) {
                $sheet->setCellValue($cell, 'P');
                $totalLeaveDays++;
                break;
            }
        }

        $startDate->modify('+1 day');
        $colNumber++;
    }

    // Tính tổng số giờ làm (Mỗi chữ 'P' là 8 tiếng)
    $totalHoursWorked = $totalLeaveDays * 8;
    $sheet->setCellValue('BZ' . $rowNumber, $totalHoursWorked);

    $rowNumber++; // Tăng dòng cho nhân viên tiếp theo
}

// Áp dụng style cho tất cả các hàng
for ($row = 1; $row < $rowNumber; $row++) {
    $sheet->getStyle('AR' . $row . ':BY' . $row)->applyFromArray($dataStyle);
}

// Tự động điều chỉnh chiều cao của các hàng
for ($row = 1; $row <= $rowNumber; $row++) {
    $sheet->getRowDimension($row)->setRowHeight(-1); // Điều chỉnh tự động
}

////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////####################################///////////////////////

   

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
