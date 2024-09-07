<?php
$module_name = 'sgt_chuyenkho';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'NGAYCHUYEN' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYCHUYEN',
    'width' => '10%',
    'default' => true,
  ),
  'TUKHO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_TUKHO',
    'id' => 'SGT_TENKHO_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'DENKHO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DENKHO',
    'id' => 'SGT_TENKHO_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TINHTRANG' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TINHTRANG',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
