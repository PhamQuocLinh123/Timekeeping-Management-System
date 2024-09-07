<?php
$module_name = 'sgt_atld';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'LOAI' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LOAI',
    'width' => '10%',
    'default' => true,
  ),
  'SGT_BHTN_SGT_NHANVIEN_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_BHTN_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
    'id' => 'SGT_BHTN_SGT_NHANVIENSGT_NHANVIEN_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'NGAYHIEULUC' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYHIEULUC',
    'width' => '10%',
    'default' => true,
  ),
  'NGAYHETHAN' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYHETHAN',
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
