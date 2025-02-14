<?php
$popupMeta = array (
    'moduleMain' => 'sgt_chamcong',
    'varName' => 'sgt_chamcong',
    'orderBy' => 'sgt_chamcong.name',
    'whereClauses' => array (
  'name' => 'sgt_chamcong.name',
  'nhanvien' => 'sgt_chamcong.nhanvien',
  'ma_nv' => 'sgt_chamcong.ma_nv',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'nhanvien',
  5 => 'ma_nv',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'nhanvien' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NHANVIEN',
    'id' => 'SGT_NHANVIEN_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'nhanvien',
  ),
  'ma_nv' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MA_NV',
    'width' => '10%',
    'name' => 'ma_nv',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'MA_NV' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MA_NV',
    'width' => '10%',
    'default' => true,
    'name' => 'ma_nv',
  ),
  'TONGGIOLAM' => 
  array (
    'type' => 'float',
    'label' => 'LBL_TONGGIOLAM',
    'width' => '10%',
    'default' => true,
    'name' => 'tonggiolam',
  ),
  'DACBIET' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DACBIET',
    'width' => '10%',
    'default' => true,
    'name' => 'dacbiet',
  ),
),
);
