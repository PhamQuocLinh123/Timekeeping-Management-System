<?php
$module_name = 'sgt_tamung';
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
  'MA_NV' => 
  array (
    'type' => 'int',
    'label' => 'LBL_MA_NV',
    'width' => '10%',
    'default' => true,
  ),
  'NGAYTAMUNG' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYTAMUNG',
    'width' => '10%',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '10%',
    'default' => true,
  ),
  'SOTIENTAMUNG' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_SOTIENTAMUNG',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'NGAYDUYET' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYDUYET',
    'width' => '10%',
    'default' => true,
  ),
  'TINHTRANGTAMUNG' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TINHTRANGTAMUNG',
    'width' => '10%',
    'default' => true,
  ),
  'SGT_TAMUNG_SGT_DUAN_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_TAMUNG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
    'id' => 'SGT_TAMUNG_SGT_DUANSGT_DUAN_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
