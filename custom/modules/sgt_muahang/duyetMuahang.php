<?php
if (!(ACLController::checkAccess('sgt_muahang', 'edit', true))) {
   ACLController::displayNoAccess();
   die;
}

$mh = BeanFactory::newBean('sgt_muahang');
$mh->retrieve($_REQUEST['record']);
//update xacnhan
$mh->pheduyet = 'daduyet';
$mh->save();

ob_clean();
header('Location: index.php?module=sgt_muahang&action=DetailView&record='.$mh->id);

