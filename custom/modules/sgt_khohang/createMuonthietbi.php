<?php
if (!(ACLController::checkAccess('sgt_khohang', 'list', true))) {
      ACLController::displayNoAccess();
      die;
   }
global $current_user;
if (!empty($_REQUEST['uid'])) {
   $recordIds = explode(',',$_REQUEST['uid']);
   // tao phieu muon thiet bi
   $mtb = BeanFactory::newBean('sgt_muonthietbi');
   $mtb->name = date('dmYs').'_MTB';
   $mtb->ngaymuon = date('d/m/Y');
   $mtb->ngaydukien = date('d/m/Y');
   $mtb->assigned_user_id = $current_user->id;
   $mtb->save();
   foreach ($recordIds as $recId) {
      $thietbi = BeanFactory::getBean('sgt_khohang',$recId);
      $dstb = BeanFactory::newBean('sgt_thietbimuon');
      $dstb->sgt_khohang_id_c = $recId;
      $dstb->name = $thietbi->name;
      $dstb->soluong = 1;
      $dstb->ma_vt = $thietbi->ma_vt;
      $dstb->dvt = $thietbi->dvt;
      $dstb->sgt_tenkho_id_c = $thietbi->sgt_tenkho_id_c;
      $dstb->assigned_user_id = $current_user->id;
      $dstb->tinhtrang = 'tot';
      $dstb->sgt_thietbimuon_sgt_muonthietbisgt_muonthietbi_ida = $mtb->id;
      $dstb->save();
   }
   $mtb->sgt_tenkho_id_c = $thietbi->sgt_tenkho_id_c;
   $mtb->save();
}
ob_clean();
header('Location: index.php?module=sgt_muonthietbi&action=DetailView&record='.$mtb->id);
