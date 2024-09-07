<?php
$popupMeta = array (
    'moduleMain' => 'sgt_khohang',
    'varName' => 'sgt_khohang',
    'orderBy' => 'sgt_khohang.name',
    'whereClauses' => array (
  'name' => 'sgt_khohang.name',
  'ma_vt' => 'sgt_khohang.ma_vt',
  'loai' => 'sgt_khohang.loai',
  'tenkho' => 'sgt_khohang.tenkho',
  'nhanhieu' => 'sgt_khohang.nhanhieu',
  'tinhtrang' => 'sgt_khohang.tinhtrang',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'ma_vt',
  5 => 'loai',
  6 => 'tenkho',
  7 => 'nhanhieu',
  8 => 'tinhtrang',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'ma_vt' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MA_VT',
    'width' => '10%',
    'name' => 'ma_vt',
  ),
  'loai' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LOAI',
    'width' => '10%',
    'name' => 'loai',
  ),
  'tenkho' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_TENKHO',
    'id' => 'SGT_TENKHO_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'tenkho',
  ),
  'nhanhieu' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_NHANHIEU',
    'width' => '10%',
    'name' => 'nhanhieu',
  ),
  'tinhtrang' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TINHTRANG',
    'width' => '10%',
    'name' => 'tinhtrang',
  ),
),
);
