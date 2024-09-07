<?php
$module_name = 'sgt_vattumua';
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
  'DONGIA' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_DONGIA',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'THANHTIEN' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_THANHTIEN',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'LOAI' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LOAI',
    'width' => '10%',
    'default' => true,
  ),
  'SGT_VATTUMUA_SGT_MUAHANG_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_VATTUMUA_SGT_MUAHANG_FROM_SGT_MUAHANG_TITLE',
    'id' => 'SGT_VATTUMUA_SGT_MUAHANGSGT_MUAHANG_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TENKHO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_TENKHO',
    'id' => 'SGT_TENKHO_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
