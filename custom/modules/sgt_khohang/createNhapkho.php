<?php
if (!(ACLController::checkAccess('sgt_khohang', 'edit', true))) {
      ACLController::displayNoAccess();
      die;
   }
global $current_user;
if (!empty($_REQUEST['uid'])) {
   $recordIds = explode(',',$_REQUEST['uid']);
   // tao phieu nhap kho
   $kho_asung = 'bcdf9152-1b97-5a2a-41f4-668345bc9f60';
   $nk = BeanFactory::newBean('sgt_nhapkho');
   $nk->name = date('dmYs').'_NK';
   $nk->ngaynhap = date('d/m/Y');
   $nk->assigned_user_id = $current_user->id;
   $nk->sgt_tenkho_id_c = $kho_asung;
   $nk->save();
   foreach ($recordIds as $recId) {
      $thietbi = BeanFactory::getBean('sgt_khohang',$recId);
      $tbn = BeanFactory::newBean('sgt_vattunhap');
      $tbn->sgt_khohang_id_c = $recId;
      $tbn->name = $thietbi->name;
      $tbn->soluong = 1;
      $tbn->ma_vt = $thietbi->ma_vt;
      $tbn->dvt = $thietbi->dvt;
      $tbn->sgt_tenkho_id_c = $kho_asung;
      $tbn->loai = $thietbi->loai;
      $tbn->assigned_user_id = $thietbi->assigned_user_id;
      $tbn->sgt_vattunhap_sgt_nhapkhosgt_nhapkho_ida = $nk->id;
      $tbn->save();
   }
}
ob_clean();
header('Location: index.php?module=sgt_nhapkho&action=DetailView&record='.$nk->id);
