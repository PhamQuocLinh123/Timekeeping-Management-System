<?php
if (!(ACLController::checkAccess('sgt_khohang', 'edit', true))) {
      ACLController::displayNoAccess();
      die;
   }

if (!empty($_REQUEST['uid'])) {
   $recordIds = explode(',',$_REQUEST['uid']);
   // tao phieu mua hang
   $mh = BeanFactory::newBean('sgt_muahang');
   $mh->name = date('dmYs').'_MH';
   $mh->ngaydexuat = date('d/m/Y');
   $mh->save();
   foreach ($recordIds as $recId) {
      $khohang = BeanFactory::getBean('sgt_khohang',$recId);
      $vtm = BeanFactory::newBean('sgt_vattumua');
      $vtm->sgt_khohang_id_c = $recId;
      $vtm->name = $khohang->name;
      $vtm->soluong = 1;
      $vtm->ma_vt = $khohang->ma_vt;
      $vtm->dvt = $khohang->dvt;
      $vtm->sgt_tenkho_id_c = $khohang->sgt_tenkho_id_c;
      $vtm->loai = $khohang->loai;
      $vtm->sgt_vattumua_sgt_muahangsgt_muahang_ida = $mh->id;
      $vtm->save();
   }
}
ob_clean();
header('Location: index.php?module=sgt_muahang&action=DetailView&record='.$mh->id);
