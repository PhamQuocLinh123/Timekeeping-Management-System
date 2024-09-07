<?php
if (!(ACLController::checkAccess('sgt_muonthietbi', 'edit', true))) {
   ACLController::displayNoAccess();
   die;
}

$mtb = BeanFactory::newBean('sgt_muonthietbi');
$mtb->retrieve($_REQUEST['record']);
//update xacnhan
$mtb->xacnhan = 'damuon';
$mtb->save();
$tbms = $mtb->get_linked_beans('sgt_thietbimuon_sgt_muonthietbi','sgt_thietbimuon');
foreach ($tbms as $tbm){
   $khBeans = BeanFactory::getBean('sgt_khohang')->get_full_list('',"sgt_khohang.name = '".$tbm->name."' AND sgt_khohang.sgt_tenkho_id_c = '".$tbm->sgt_tenkho_id_c."'");
   foreach ($khBeans as $kh){
      $kh->tt_kho = 'chomuon';
      $kh->save();
   }
}
ob_clean();
header('Location: index.php?module=sgt_muonthietbi&action=DetailView&record='.$mtb->id);

