<?php
class Tonghopchamcong{
    static $already_ran = false;
    
    function tinhcongnhanvien($bean, $event, $arguments){
        // Ngăn chặn việc chạy nhiều lần trên logic hooks
        if(self::$already_ran == true) return;
        self::$already_ran = true;

        $month = date('m', strtotime($bean->tungay));
        $bean->name = date('Ymds')."_THCC_".$month;
        
        $tungay = $bean->tungay;
        $denngay = $bean->denngay;
        $duanid = $bean->sgt_duan_id_c;

        $duanBeans = BeanFactory::getBean('sgt_duan', $duanid);
        if($duanBeans){
            $duanBeans->load_relationship('sgt_nhanvien_sgt_duan');
            $nvccList = $duanBeans->sgt_nhanvien_sgt_duan->getBeans();
            $tgl_da = 0;
            $tn_thuong = 0;
            $tn_chunhat = 0;
            $tn_le = 0;
            $tongnhanvien = 0;
            $tongtangca = 0; // Biến để đếm tổng giờ tăng ca

            foreach($nvccList as $nvcc){
                $tongnhanvien++; // Tăng số lượng nhân viên

                // Query cho ngày thường
                $query_thuong = "sgt_dschamcong.ma_nv = '".$nvcc->ma_nv."' AND sgt_dschamcong.sgt_duan_id_c = '".$duanid."' AND (sgt_dschamcong.ngaychamcong BETWEEN '".$tungay."' AND '".$denngay."') AND sgt_dschamcong.loaingay ='ngaythuong'";
                $tonggiocong_thuong = BeanFactory::getBean('sgt_dschamcong')->get_full_list('', $query_thuong);

                $tonggiolam_thuong = 0;
                if($tonggiocong_thuong){
                    foreach($tonggiocong_thuong as $chamcong){
                        $tonggiolam_thuong += $chamcong->tonggiolam * $chamcong->heso;
                        $ngaychamcong_thuong = $chamcong->ngaychamcong;
                    }
                }

                // Query cho ngày Chủ nhật
                $query_chunhat = "sgt_dschamcong.ma_nv = '".$nvcc->ma_nv."' AND sgt_dschamcong.sgt_duan_id_c = '".$duanid."' AND (sgt_dschamcong.ngaychamcong BETWEEN '".$tungay."' AND '".$denngay."') AND sgt_dschamcong.loaingay ='chunhat'";
                $tonggiocong_chunhat = BeanFactory::getBean('sgt_dschamcong')->get_full_list('', $query_chunhat);

                $tonggiolam_chunhat = 0;
                if($tonggiocong_chunhat){
                    foreach($tonggiocong_chunhat as $chamcong){
                        $tonggiolam_chunhat += $chamcong->tonggiolam;
                    }
                }

                // Query cho ngày lễ
                $query_le = "sgt_dschamcong.ma_nv = '".$nvcc->ma_nv."' AND sgt_dschamcong.sgt_duan_id_c = '".$duanid."' AND (sgt_dschamcong.ngaychamcong BETWEEN '".$tungay."' AND '".$denngay."') AND sgt_dschamcong.loaingay ='ngayle'";
                $tonggiocong_le = BeanFactory::getBean('sgt_dschamcong')->get_full_list('', $query_le);
                $tonggiolam_le = 0;
                if($tonggiocong_le){
                    foreach($tonggiocong_le as $chamcong){
                        $tonggiolam_le += $chamcong->tonggiolam * $chamcong->heso;
                       
                    }
                }

                // Tổng hợp giờ làm từ ngày thường, Chủ nhật và ngày lễ
                $tonggiolam = $tonggiolam_thuong + $tonggiolam_chunhat + $tonggiolam_le;

                // Query cho giờ tăng ca
                $query_tangca = "sgt_dstangca.ma_nv = '".$nvcc->ma_nv."' AND sgt_dstangca.sgt_duan_id_c = '".$duanid."' AND (sgt_dstangca.ngay BETWEEN '".$tungay."' AND '".$denngay."')";
                $tonggio_tangca = BeanFactory::getBean('sgt_dstangca')->get_full_list('', $query_tangca);

                $tonggiolam_tangca = 0;
                if($tonggio_tangca){
                    foreach($tonggio_tangca as $tangca){
                        $tonggiolam_tangca += $tangca->tonggiolam * $tangca->heso;
                    }
                }
                $ctnvBeans = BeanFactory::getBean('sgt_chitietnv');
                $ctnvBeans->name = $nvcc->name;
                $ctnvBeans->sgt_nhanvien_id_c = $nvcc->id;
                $ctnvBeans->manv = $nvcc->ma_nv;
                $ctnvBeans->ngaychamcong = $tungay . ' đến ' . $denngay; // Cập nhật ngày chấm công tổng hợp
                $ctnvBeans->tg_ngaythuong = $tonggiolam_thuong / 8;
                $ctnvBeans->tg_chunhat = $tonggiolam_chunhat / 8;
                $ctnvBeans->tg_ngayle = $tonggiolam_le / 8;
                $ctnvBeans->tg_giocong = $tonggiolam;
                $ctnvBeans->tg_tangca = $tonggiolam_tangca/8; 
                $ctnvBeans->ngaychamcong = $ngaychamcong_thuong;
               
                $ctnvBeans->save();

                $tgl_da += $tonggiolam; // Tổng hợp giờ công
                $tn_thuong += count($tonggiocong_thuong); // Tổng hợp số ngày chấm công ngày thường
                $tn_chunhat += count($tonggiocong_chunhat); // Tổng hợp số ngày chấm công Chủ nhật
                $tn_le += count($tonggiocong_le); // Tổng hợp số ngày chấm công ngày lễ
                $tongtangca += $tonggiolam_tangca; // Tổng hợp giờ tăng ca
            }

            $GLOBALS['log']->fatal($tgl_da);
            $GLOBALS['log']->fatal($tn_thuong);
            $GLOBALS['log']->fatal($tn_chunhat);
            $GLOBALS['log']->fatal($tn_le);
            $GLOBALS['log']->fatal($tongnhanvien); // Log tổng số nhân viên
            $GLOBALS['log']->fatal($tongtangca); // Log tổng giờ tăng ca

            $bean->tgl_da = $tgl_da; // Cập nhật giá trị tổng hợp
            $bean->tonggiocong = $tgl_da; // Gán giá trị tổng số giờ công cho $bean->tonggiocong
            $bean->tongnhanvien = $tongnhanvien; // Gán giá trị tổng số nhân viên cho $bean->tongnhanvien
            $bean->tongtangca = $tongtangca; // Gán giá trị tổng số giờ tăng ca cho $bean->tongtangca
            $bean->save();
        }
    }
}
?>
