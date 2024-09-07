<?php

if (!defined('sugarEntry') || !sugarEntry) die('');

class Tonghopvangmat
{
    public function tinhngayvangmat($bean, $event, $arguments)
    {
        // Kiểm tra nếu 'tungay' và 'denngay' không rỗng
        if (!empty($bean->tungay) && !empty($bean->denngay)) {
            // Chuyển đổi 'tungay' và 'denngay' thành đối tượng DateTime
            $tungay = new DateTime($bean->tungay);
            $denngay = new DateTime($bean->denngay);

            // Tính tổng số ngày nghỉ giữa hai ngày (bao gồm cả tungay và denngay)
            $tongSoNgay = $denngay->diff($tungay)->days + 1; 
            $bean->tongsongay = $tongSoNgay;

            // Tính tổng số ngày đã nghỉ trước đó (tg_ngaydanghi)
            $tg_ngaydanghi_truoc = 0;

            if (!empty($bean->sgt_nhanvien_id_c)) {
                // Truy vấn tổng số ngày đã nghỉ trước đó của nhân viên này, không bao gồm bản ghi hiện tại
                $sql = "SELECT SUM(tongsongay) AS tong_ngay_da_nghi 
                        FROM sgt_vangmat 
                        WHERE sgt_nhanvien_id_c = '{$bean->sgt_nhanvien_id_c}' 
                        AND deleted = 0 
                        AND id != '{$bean->id}'
                        AND pheduyet = 1
                        AND (denngay < '{$bean->tungay}' OR tungay <= '{$bean->denngay}')";
                $result = $GLOBALS['db']->query($sql);
                $row = $GLOBALS['db']->fetchByAssoc($result);

                if (!empty($row['tong_ngay_da_nghi'])) {
                    $tg_ngaydanghi_truoc = $row['tong_ngay_da_nghi'];
                }
            }

            $bean->tg_ngaydanghi = $tg_ngaydanghi_truoc;

            // Tính tổng số ngày nghỉ trong năm từ đầu năm đến trước ngày của bản ghi hiện tại
            $nghitrongnam = 0;
            $yearOfTungay = $tungay->format('Y');
            $yearOfDenngay = $denngay->format('Y');
            $startOfYear = "{$yearOfTungay}-01-01";


            if (!empty($bean->sgt_nhanvien_id_c)) {
                $sqlYearly = "SELECT SUM(tongsongay) AS tong_ngay_nghi_nam 
                              FROM sgt_vangmat 
                              WHERE sgt_nhanvien_id_c = '{$bean->sgt_nhanvien_id_c}' 
                              AND deleted = 0 
                              AND pheduyet = 1
                              AND YEAR(tungay) = '{$yearOfTungay}' 
                              AND YEAR(denngay) = '{$yearOfDenngay}' 
                              AND denngay < '{$bean->tungay}' 
                              AND tungay <= '{$bean->tungay}'";
                $resultYearly = $GLOBALS['db']->query($sqlYearly);
                $rowYearly = $GLOBALS['db']->fetchByAssoc($resultYearly);

                if (!empty($rowYearly['tong_ngay_nghi_nam'])) {
                    $nghitrongnam = $rowYearly['tong_ngay_nghi_nam'];
                }
            }

            $bean->nghitrongnam = $nghitrongnam;

            // Lấy tên nhân viên và mã NV từ bảng sgt_nhanvien
            if (!empty($bean->sgt_nhanvien_id_c)) {
                $nhanvienBean = BeanFactory::getBean('sgt_nhanvien', $bean->sgt_nhanvien_id_c);
                if ($nhanvienBean) {
                    $bean->name = $nhanvienBean->name; // Tên nhân viên
                    $bean->ma_nv = $nhanvienBean->ma_nv; // Mã NV
                }
            }
        } else {
            // Nếu 'tungay' hoặc 'denngay' rỗng, đặt các trường giá trị bằng 0
            $bean->tongsongay = 0;
            $bean->tg_ngaydanghi = 0;
            $bean->nghitrongnam = 0;
        }
    }
}
