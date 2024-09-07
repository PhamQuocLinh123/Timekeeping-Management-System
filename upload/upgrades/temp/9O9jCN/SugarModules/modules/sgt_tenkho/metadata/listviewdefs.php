<?php
$module_name = 'sgt_tenkho';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'VITRI' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VITRI',
    'width' => '10%',
    'default' => true,
  ),
  'THUKHO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_THUKHO',
    'id' => 'SGT_NHANVIEN_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
