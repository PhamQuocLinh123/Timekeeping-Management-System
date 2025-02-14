<?php
$popupMeta = array (
    'moduleMain' => 'sgt_bhtn',
    'varName' => 'sgt_bhtn',
    'orderBy' => 'sgt_bhtn.name',
    'whereClauses' => array (
  'name' => 'sgt_bhtn.name',
  'tinhtrang' => 'sgt_bhtn.tinhtrang',
  'sgt_atld_sgt_nhanvien_name' => 'sgt_bhtn.sgt_atld_sgt_nhanvien_name',
  'loai' => 'sgt_atld.loai',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'tinhtrang',
  5 => 'sgt_atld_sgt_nhanvien_name',
  6 => 'loai',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'loai' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LOAI',
    'width' => '10%',
    'name' => 'loai',
  ),
  'tinhtrang' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TINHTRANG',
    'width' => '10%',
    'name' => 'tinhtrang',
  ),
  'sgt_atld_sgt_nhanvien_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_BHTN_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
    'id' => 'SGT_BHTN_SGT_NHANVIENSGT_NHANVIEN_IDA',
    'width' => '10%',
    'name' => 'sgt_atld_sgt_nhanvien_name',
  ),
),
);
