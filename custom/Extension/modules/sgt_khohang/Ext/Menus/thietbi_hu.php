<?php

if(ACLController::checkAccess('sgt_khohang', 'edit', true)) {
   $module_menu[] = array(
       "index.php?module=sgt_khohang&action=index&thietbi_hu=true&clear_query=true",
       'Thiết bị hư', 
       'View_Diagnostics',
       'sgt_khohang' 
    );
	
}
