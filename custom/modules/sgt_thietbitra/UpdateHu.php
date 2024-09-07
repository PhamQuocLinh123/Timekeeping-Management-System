<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$focus = new sgt_thietbitra();

if (isset($_REQUEST['record'])) {
   $focus->retrieve($_REQUEST['record']);
}
$parent_id = $_REQUEST['return_id'];
$focus->tinhtrang = 'bihu';
$focus->save();

ob_clean();
header('Location: index.php?module=sgt_trathietbi&action=DetailView&record='.$parent_id);
