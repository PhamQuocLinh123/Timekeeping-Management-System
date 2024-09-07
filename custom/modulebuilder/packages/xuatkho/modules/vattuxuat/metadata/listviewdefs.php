<?php
$module_name = 'sgt_vattuxuat';
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
  'LOAI' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LOAI',
    'width' => '10%',
    'default' => true,
  ),
  'NGUOISUDUNG' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NGUOISUDUNG',
    'id' => 'SGT_NHANVIEN_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'SGT_VATTUNHAP_SGT_NHAPKHO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_VATTUNHAP_SGT_NHAPKHO_FROM_SGT_NHAPKHO_TITLE',
    'id' => 'SGT_VATTUNHAP_SGT_NHAPKHOSGT_NHAPKHO_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
