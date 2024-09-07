<?php
$module_name = 'sgt_muahang';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'NGUOIDEXUAT' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NGUOIDEXUAT',
    'id' => 'SGT_NHANVIEN_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'PHEDUYET' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PHEDUYET',
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
  'NGAYDATHANG' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYDATHANG',
    'width' => '10%',
    'default' => true,
  ),
  'TONGGIAMUA' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TONGGIAMUA',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
