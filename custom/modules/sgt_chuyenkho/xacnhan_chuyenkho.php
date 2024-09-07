<?php
if (!(ACLController::checkAccess('sgt_chuyenkho', 'edit', true))) {
   ACLController::displayNoAccess();
   die;
}

$ck = BeanFactory::newBean('sgt_chuyenkho');
$ck->retrieve($_REQUEST['record']);
//update tinh trang
if ($ck->tinhtrang != 'dachuyen'){
   $ck->tinhtrang = 'dachuyen';
   $ck->save();
   $vtcs = $ck->get_linked_beans('sgt_vattuchuyen_sgt_chuyenkho','sgt_vattuchuyen',[],0,0,0);
   foreach ($vtcs as $vtc){
      $khBeans = BeanFactory::getBean('sgt_khohang')->get_full_list('',"sgt_khohang.name = '".$vtc->name."' AND sgt_khohang.sgt_tenkho_id_c = '".$vtc->sgt_tenkho_id_c."' AND sgt_khohang.deleted =0");
      $nkhBeans = BeanFactory::getBean('sgt_khohang')->get_full_list('',"sgt_khohang.name = '".$vtc->name."' AND sgt_khohang.sgt_tenkho_id_c = '".$ck->sgt_tenkho_id1_c."' AND sgt_khohang.deleted =0");
      foreach ($khBeans as $kh){
         if ($kh->soluong === $vtc->soluong){
	    $kh->sgt_tenkho_id_c = $ck->sgt_tenkho_id1_c;
	    $kh->assigned_user_id = $ck->assigned_user_id;
	    $kh->save();
	 } else {
            $kh->soluong = $kh->fetched_row['soluong'] - $vtc->soluong;
            $kh->save();
      	    if ($nkhBeans){
	       foreach ($nkhBeans as $nkh){
		  $nkh->soluong = $nkh->fetched_row['soluong'] + $vtc->soluong;
		  $nkh->save();
	       }
	    } else {
	       $nkvt = BeanFactory::newBean('sgt_khohang');
	       $nkvt->name = $kh->name;
	       $nkvt->ma_vt = $kh->ma_vt;
	       $nkvt->loai = $kh->loai;
	       $nkvt->dvt = $kh->dvt;
	       $nkvt->nhanhieu = $kh->nhanhieu;
	       $nkvt->soluong = $vtc->soluong;
	       $nkvt->tt_kho = 'trongkho';
	       $nkvt->tinhtrang = 'tot';
	       $nkvt->sgt_tenkho_id_c = $ck->sgt_tenkho_id1_c;
	       $nkvt->AOS_Product_Categories_id_c = $kh->AOS_Product_Categories_id_c;
	       $nkvt->assigned_user_id = $ck->assigned_user_id;
	       $nkvt->save();
            }
	 }
      }
   }
}
ob_clean();
header('Location: index.php?module=sgt_chuyenkho&action=DetailView&record='.$ck->id);

