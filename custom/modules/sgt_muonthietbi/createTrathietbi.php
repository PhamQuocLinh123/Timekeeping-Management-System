<?php
if (!(ACLController::checkAccess('sgt_trathietbi', 'edit', true))) {
   ACLController::displayNoAccess();
   die;
}

$mtb = BeanFactory::newBean('sgt_muonthietbi');
$mtb->retrieve($_REQUEST['record']);

//tao phieu tra thiet bi
$ttb = BeanFactory::newBean('sgt_trathietbi');
$ttb->name = date('dmYs').'_TTB';
//$ttb->ngaytra = date('d/m/Y');
$ttb->sgt_duan_id_c = $mtb->sgt_duan_id_c;
$ttb->sgt_nhanvien_id_c = $mtb->sgt_nhanvien_id_c;
$ttb->sgt_tenkho_id_c = $mtb->sgt_tenkho_id_c;
$ttb->assigned_user_id = $mtb->assigned_user_id;
$ttb->sgt_trathietbi_sgt_muonthietbisgt_muonthietbi_ida = $mtb->id;
$ttb->save();

//danh sach thiet bij tra
if ($mtb->load_relationship('sgt_thietbimuon_sgt_muonthietbi')){
   $tbmBeans = $mtb->sgt_thietbimuon_sgt_muonthietbi->getBeans();
   foreach ($tbmBeans as $tbm){
      $tbt = BeanFactory::newBean('sgt_thietbitra');
      $tbt->name = $tbm->name;
      $tbt->sgt_khohang_id_c = $tbm->sgt_khohang_id_c;
      $tbt->soluong = 1;
      $tbt->dvt = $tbm->dvt;
      $tbt->ma_vt = $tbm->ma_vt;
      $tbt->sgt_tenkho_id_c = $tbm->sgt_tenkho_id_c;
      $tbt->sgt_thietbitra_sgt_trathietbisgt_trathietbi_ida = $ttb->id;
      $tbt->save();
   }
}
ob_clean();
header('Location: index.php?module=sgt_trathietbi&action=DetailView&record='.$ttb->id);

