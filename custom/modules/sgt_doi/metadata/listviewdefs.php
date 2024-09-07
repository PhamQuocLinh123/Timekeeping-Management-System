<?php
$module_name = 'sgt_doi';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'DOITRUONG' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DOITRUONG',
    'id' => 'SGT_NHANVIEN_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
