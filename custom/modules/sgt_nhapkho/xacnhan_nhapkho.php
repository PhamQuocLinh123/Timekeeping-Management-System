<?php
if (!(ACLController::checkAccess('sgt_nhapkho', 'edit', true))) {
   ACLController::displayNoAccess();
   die;
}

$nk = BeanFactory::newBean('sgt_nhapkho');
$nk->retrieve($_REQUEST['record']);
$kho_asung = 'bcdf9152-1b97-5a2a-41f4-668345bc9f60';
//update tinh trang
if ($nk->tinhtrang != 'danhap'){
   $nk->tinhtrang = 'danhap';
   $nk->save();
   $vtnks = $nk->get_linked_beans('sgt_vattunhap_sgt_nhapkho','sgt_vattunhap');
   foreach ($vtnks as $vtnk){
      $khBeans = BeanFactory::getBean('sgt_khohang')->get_full_list('',"sgt_khohang.name = '".$vtnk->name."' AND sgt_khohang.sgt_tenkho_id_c = '".$kho_asung."'");
      if ($khBeans){
         foreach ($khBeans as $kh){
            $kh->tt_kho = 'trongkho';
            $kh->soluong = $kh->fetched_row['soluong'] + $vtnk->soluong;
            $kh->save();
         }
      } else {
         $new_kh = BeanFactory::newBean('sgt_khohang');
         $new_kh->name = $vtnk->name;
         $new_kh->ma_vt = $vtnk->ma_vt;
    	 $new_kh->loai = $vtnk->loai;
  	 $new_kh->soluong = $vtnk->soluong;
  	 $new_kh->dvt = $vtnk->dvt;
  	 $new_kh->sgt_tenkho_id_c= $kho_asung;
  	 $new_kh->tt_kho = 'trongkho';
  	 $new_kh->tinhtrang = 'tot';
  	 $new_kh->assigned_user_id = $vtnk->assigned_user_id;
	 $new_kh->save();
      }
   }
}
ob_clean();
header('Location: index.php?module=sgt_nhapkho&action=DetailView&record='.$nk->id);

