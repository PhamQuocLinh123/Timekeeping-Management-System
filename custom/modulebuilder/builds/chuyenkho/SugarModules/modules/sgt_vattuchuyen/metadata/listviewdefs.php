<?php
$module_name = 'sgt_vattuchuyen';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MA_VT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MA_VT',
    'width' => '10%',
    'default' => true,
  ),
  'SOLUONG' => 
  array (
    'type' => 'float',
    'label' => 'LBL_SOLUONG',
    'width' => '10%',
    'default' => true,
  ),
  'DVT' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DVT',
    'width' => '10%',
    'default' => true,
  ),
  'SGT_VATTUCHUYEN_SGT_CHUYENKHO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_VATTUCHUYEN_SGT_CHUYENKHO_FROM_SGT_CHUYENKHO_TITLE',
    'id' => 'SGT_VATTUCHUYEN_SGT_CHUYENKHOSGT_CHUYENKHO_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
