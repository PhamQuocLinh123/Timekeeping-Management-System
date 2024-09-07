<?php
$popupMeta = array (
    'moduleMain' => 'sgt_dsluong',
    'varName' => 'sgt_dsluong',
    'orderBy' => 'sgt_dsluong.name',
    'whereClauses' => array (
  'name' => 'sgt_dsluong.name',
  'sgt_dsluong_sgt_nhanvien_name' => 'sgt_dsluong.sgt_dsluong_sgt_nhanvien_name',
  'ma_nv' => 'sgt_dsluong.ma_nv',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'sgt_dsluong_sgt_nhanvien_name',
  5 => 'ma_nv',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'sgt_dsluong_sgt_nhanvien_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_DSLUONG_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
    'id' => 'SGT_DSLUONG_SGT_NHANVIENSGT_NHANVIEN_IDA',
    'width' => '10%',
    'name' => 'sgt_dsluong_sgt_nhanvien_name',
  ),
  'ma_nv' => 
  array (
    'type' => 'int',
    'label' => 'LBL_MA_NV',
    'width' => '10%',
    'name' => 'ma_nv',
  ),
),
);
