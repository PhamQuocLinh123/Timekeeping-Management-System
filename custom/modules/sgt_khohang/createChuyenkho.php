<?php
if (!(ACLController::checkAccess('sgt_khohang', 'list', true))) {
      ACLController::displayNoAccess();
      die;
   }
global $current_user;
if (!empty($_REQUEST['uid'])) {
   $recordIds = explode(',',$_REQUEST['uid']);
   // tao phieu chuyen kho
   $ck = BeanFactory::newBean('sgt_chuyenkho');
   $ck->name = date('dmYs').'_CK';
   $ck->ngaychuyen = date('d/m/Y');
   $ck->assigned_user_id = $current_user->id;
   $ck->save();
   foreach ($recordIds as $recId) {
      $thietbi = BeanFactory::getBean('sgt_khohang',$recId);
      $vtc = BeanFactory::newBean('sgt_vattuchuyen');
      $vtc->sgt_khohang_id_c = $recId;
      $vtc->name = $thietbi->name;
      $vtc->soluong = 1;
      $vtc->ma_vt = $thietbi->ma_vt;
      $vtc->dvt = $thietbi->dvt;
      $vtc->sgt_tenkho_id_c = $thietbi->sgt_tenkho_id_c;
      $vtc->loai = $thietbi->loai;
      $vtc->sgt_vattuchuyen_sgt_chuyenkhosgt_chuyenkho_ida= $ck->id;
      $vtc->save();
   }
   $ck->sgt_tenkho_id_c = $thietbi->sgt_tenkho_id_c;
   $ck->save();
}
ob_clean();
header('Location: index.php?module=sgt_chuyenkho&action=DetailView&record='.$ck->id);
