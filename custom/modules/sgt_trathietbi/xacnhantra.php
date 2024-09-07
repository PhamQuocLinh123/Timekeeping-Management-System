<?php
if (!(ACLController::checkAccess('sgt_trathietbi', 'edit', true))) {
   ACLController::displayNoAccess();
   die;
}

$ttb = BeanFactory::newBean('sgt_trathietbi');
$ttb->retrieve($_REQUEST['record']);
//update xacnhan
if ($ttb->tinhtrang != 'datra'){
   $ttb->tinhtrang = 'datra';
   $ttb->save();
   $tbts = $ttb->get_linked_beans('sgt_thietbitra_sgt_trathietbi','sgt_thietbitra');
   foreach ($tbts as $tbt){
      $khBeans = BeanFactory::getBean('sgt_khohang')->get_full_list('',"sgt_khohang.name = '".$tbt->name."' AND sgt_khohang.sgt_tenkho_id_c = '".$tbt->sgt_tenkho_id_c."'");
      foreach ($khBeans as $kh){
         $kh->tt_kho = 'trongkho';
         $kh->tinhtrang = $tbt->tinhtrang;
         $kh->save();
      }
   }
}
ob_clean();
header('Location: index.php?module=sgt_trathietbi&action=DetailView&record='.$ttb->id);

