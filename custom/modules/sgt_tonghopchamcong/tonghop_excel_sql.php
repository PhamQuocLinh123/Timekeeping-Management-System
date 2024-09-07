<?php

// Include các thư viện cần thiết từ PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

// Thay đổi thông tin kết nối cơ sở dữ liệu cho phù hợp với cấu hình của bạn
$servername = "localhost";
$username = "root";
$password = "linh@2024#";
$dbname = "asungvina";

// Tạo kết nối đến cơ sở dữ liệu
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy ID từ tham số GET
$id = isset($_GET['record']) ? $_GET['record'] : '';
if (empty($id)) {
    die("ID không được để trống.");
}

// Thực hiện truy vấn với ID lấy từ tham số GET
$sql = "SELECT id, name, sgt_duan_id_c, tungay, denngay, tongnhanvien, tonggiocong 
        FROM sgt_tonghopchamcong 
        WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {
    die("Không tìm thấy dữ liệu với ID: " . htmlspecialchars($id));
}

// Tạo một đối tượng mới cho bảng tính
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Thiết lập tiêu đề cho các cột trong Excel bằng tiếng Việt
$sheet->setCellValue('A1', 'Mã')
      ->setCellValue('B1', 'Tên')
      ->setCellValue('C1', 'Mã dự án')
      ->setCellValue('D1', 'Từ ngày')
      ->setCellValue('E1', 'Đến ngày')
      ->setCellValue('F1', 'Tổng số nhân viên')
      ->setCellValue('G1', 'Tổng giờ công');

// Điền dữ liệu vào bảng tính
$row = 2;
while ($row_data = $result->fetch_assoc()) {
    $sheet->setCellValue('A' . $row, $row_data['id'])
          ->setCellValue('B' . $row, $row_data['name'])
          ->setCellValue('C' . $row, $row_data['sgt_duan_id_c'])
          ->setCellValue('D' . $row, $row_data['tungay'])
          ->setCellValue('E' . $row, $row_data['denngay'])
          ->setCellValue('F' . $row, $row_data['tongnhanvien'])
          ->setCellValue('G' . $row, $row_data['tonggiocong']);
    $row++;
}

// Đóng kết nối cơ sở dữ liệu
$stmt->close();
$conn->close();

// Tạo tên file và xuất tệp Excel
$filename = 'tonghopchamcong_' . htmlspecialchars($id) . '.xlsx';

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $filename . '"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
ob_clean();
$writer->save('php://output');
exit;

?>
