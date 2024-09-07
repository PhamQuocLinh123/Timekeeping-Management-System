<?php
$module_name = 'sgt_khohang';
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
  'TAITRONG' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TAITRONG',
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
  'NHOM_VT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NHOM_VT',
    'id' => 'AOS_PRODUCT_CATEGORIES_ID_C',
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
  'TT_KHO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TT_KHO',
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
