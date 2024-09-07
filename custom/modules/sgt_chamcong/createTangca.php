<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$focus = new sgt_chamcong();

$GLOBALS['log']->fatal($focus->custom_hidden_1);
//$GLOBALS['log']->fatal($_REQUEST['record']);
/*if (isset($_REQUEST['record'])) {
   $focus->retrieve($_REQUEST['record']);
}
$parent_id = $_REQUEST['return_id'];
$focus->dathang = 1;
$focus->save();

ob_clean();
header('Location: index.php?module=sgt_mo&action=DetailView&record='.$parent_id);
*/
