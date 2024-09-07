<?php
class Chamcong {
   function tinhGiolamviec($bean, $event, $arguments){
      if ($_REQUEST['sgt_dschamcong_sgt_chamcongsgt_chamcong_ida']){
         $ccID = $_REQUEST['sgt_dschamcong_sgt_chamcongsgt_chamcong_ida'];
      } else {$ccID = $_REQUEST['return_id'];}
      $cc = BeanFactory::getBean('sgt_chamcong',$ccID);
      //$loaigio = $cc->loaigio;
      $bean->sgt_duan_id_c = $cc->sgt_chamcong_sgt_duansgt_duan_ida;
      $m = str_pad($bean->ma_cc,5, "0", STR_PAD_LEFT);
      $bean->ma_nv = substr($m, -4);
      $nvs = BeanFactory::getBean('sgt_nhanvien')->get_full_list('',"sgt_nhanvien.ma_nv = '".$bean->ma_nv."' AND sgt_nhanvien.deleted = 0");
      if ($nvs){
         foreach ($nvs as $nv) {
            $nvID = $nv->id;
            $loaica = $nv->loaica;
         }
      }
      $giovao = 0; $giora = 0; $tc = '';
      $gvn = 0; $grn = 0; $gvd = 0; $grd = 0;
      //get nhanvien
      $bean->sgt_nhanvien_id_c = $nvID;
      $duan = BeanFactory::getBean('sgt_duan',$cc->sgt_chamcong_sgt_duansgt_duan_ida);
      $duan->load_relationship('sgt_calamviec_sgt_duan');
      $calv = $duan->sgt_calamviec_sgt_duan->getBeans();
      foreach ($calv as $ca){
         if ($ca->tenca == 'cangay'){$gvn = $ca->giovao; $grn = $ca->giora;}
         if ($ca->tenca == 'cadem'){$gvd = $ca->giovao; $grd = $ca->giora;}
         if ($ca->tenca == 'ca1'){$gv1 = $ca->giovao; $gr1 = $ca->giora;}
         if ($ca->tenca == 'ca2'){$gv2 = $ca->giovao; $gr2 = $ca->giora;}
         if ($ca->tenca == 'ca3'){$gv3 = $ca->giovao; $gr3 = $ca->giora;}
      }
      //if ($ca->tenca == 'cadem'){$gionghi = new DateInterval('P0M');}
      $giovao = strtotime($bean->giovao);
      $giora = strtotime($bean->giora);
      $noon = strtotime('12:00');
      $anoon = strtotime('17:00');
      $midnight = strtotime('24:00');
      $night = strtotime('00:01');
      //gio ca 1
      if ($loaica != '3ca'){
         $gvcn = strtotime($gvn);
         $grcn = strtotime($grn);
         $gvcd = strtotime($gvd);
         $grcd = strtotime($grd);
         if ($giovao < $gvcn){$giovao = $gvcn;}
         if ($giora > $grcn){$giora = $grcn;}
         if (($giovao < $gvcd) && ($giovao > $noon)){$giovao = $gvcd;}
         if (($giora > $grcd) && ($giora < $noon)){$giora = $grcd;}
         if (($giora < $giovao) && ($giora > $night)){
            $giora = $giora + 86400;
         }
	 if (($giovao < $noon) && ($giovao > $night)){$tc = 'cangay';$gionghi = 5400;}
	 if (($giovao < $midnight) && ($giovao > $anoon)){$tc = 'cadem';$gionghi = 0;}
         $tonggio = $giora - $giovao - $gionghi;
      } else {
         $gvc1 = strtotime($gv1);
         $grc1 = strtotime($gr1);
         $gvc2 = strtotime($gv2);
         $grc2 = strtotime($gr2);
         $gvc3 = strtotime($gv3);
         $grc3 = strtotime($gr3);
         if (($giovao < $gvc1) && ($giovao > $grc3)){$giovao = $gvc1;$tc = 'ca1';}
         if (($giora > $grc1) && ($giora < $anoon)){$giora = $grc1;}
         if (($giovao < $gvc2) && ($giovao > $noon)){$giovao = $gvc2;$tc = 'ca2';}
         if (($giora > $grc2) && ($giora < $midnight)){$giora = $grc2;}
         if (($giovao < $gvc3) && ($giovao > $anoon)){$giovao = $gvc3;$tc = 'ca3';}
         if (($giora > $grc3) && ($giora < $gvcn)){$giora = $grc3;}
         if ($giora < $giovao){$giora = $giora + 86400;}
	 //$GLOBALS['log']->fatal(date('H:i',$giora));
         $tonggio = $giora - $giovao;
      }
      $bean->tonggiolam = $tonggio/3600;;
      $bean->tenca = $tc;
   }//func
}//class
