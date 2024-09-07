//<?php
if (!(ACLController::checkAccess('sgt_khohang', 'list', true))) {
      ACLController::displayNoAccess();
      die;
   }
global $current_user;
if (!empty($_REQUEST['uid'])) {
   $recordIds = explode(',',$_REQUEST['uid']);
   // tao phieu muon thiet bi
   $xk = BeanFactory::newBean('sgt_xuatkho');
   $xk->name = date('dmYs').'_XK';
   $xk->ngayxuat = date('d/m/Y');
   $xk->assigned_user_id = $current_user->id;
   $xk->save();
   foreach ($recordIds as $recId) {
      $thietbi = BeanFactory::getBean('sgt_khohang',$recId);
      $tbx = BeanFactory::newBean('sgt_vattuxuat');
      $tbx->sgt_khohang_id_c = $recId;
      $tbx->name = $thietbi->name;
      $tbx->soluong = 1;
      $tbx->ma_vt = $thietbi->ma_vt;
      $tbx->dvt = $thietbi->dvt;
      $tbx->sgt_tenkho_id_c = $thietbi->sgt_tenkho_id_c;
      $tbx->loai = $thietbi->loai;
      $tbx->assigned_user_id = $thietbi->assigned_user_id;
      $tbx->sgt_vattuxuat_sgt_xuatkhosgt_xuatkho_ida = $xk->id;
      $tbx->save();
   }
   $xk->sgt_tenkho_id_c = $thietbi->sgt_tenkho_id_c;
   $xk->save();
}
ob_clean();
header('Location: index.php?module=sgt_xuatkho&action=DetailView&record='.$xk->id);
