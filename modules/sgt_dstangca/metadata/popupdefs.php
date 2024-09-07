<?php
$popupMeta = array (
    'moduleMain' => 'sgt_chamcong',
    'varName' => 'sgt_chamcong',
    'orderBy' => 'sgt_chamcong.name',
    'whereClauses' => array (
  'name' => 'sgt_chamcong.name',
  'ma_nv' => 'sgt_chamcong.ma_nv',
  'ngaychamcong' => 'sgt_dschamcong.ngaychamcong',
),
    'searchInputs' => array (
  1 => 'name',
  5 => 'ma_nv',
  6 => 'ngaychamcong',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'ma_nv' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MA_NV',
    'width' => '10%',
    'name' => 'ma_nv',
  ),
  'ngaychamcong' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYCHAMCONG',
    'width' => '10%',
    'name' => 'ngaychamcong',
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
  'NGAYCHAMCONG' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYCHAMCONG',
    'width' => '10%',
    'default' => true,
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
