<?php
$popupMeta = array (
    'moduleMain' => 'h_tamung',
    'varName' => 'h_tamung',
    'orderBy' => 'h_tamung.name',
    'whereClauses' => array (
  'name' => 'sgt_tamung.name',
  'ma_nv' => 'sgt_tamung.ma_nv',
  'tinhtrangtamung' => 'sgt_tamung.tinhtrangtamung',
  'nguoidenghi' => 'sgt_tamung.nguoidenghi',
  'sgt_tamung_sgt_duan_name' => 'sgt_tamung.sgt_tamung_sgt_duan_name',
),
    'searchInputs' => array (
  5 => 'name',
  6 => 'ma_nv',
  7 => 'tinhtrangtamung',
  8 => 'nguoidenghi',
  9 => 'sgt_tamung_sgt_duan_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'ma_nv' => 
  array (
    'type' => 'int',
    'label' => 'LBL_MA_NV',
    'width' => '10%',
    'name' => 'ma_nv',
  ),
  'tinhtrangtamung' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TINHTRANGTAMUNG',
    'width' => '10%',
    'name' => 'tinhtrangtamung',
  ),
  'nguoidenghi' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NGUOIDENGHI',
    'id' => 'SGT_NHANVIEN_ID1_C',
    'link' => true,
    'width' => '10%',
    'name' => 'nguoidenghi',
  ),
  'sgt_tamung_sgt_duan_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_TAMUNG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
    'id' => 'SGT_TAMUNG_SGT_DUANSGT_DUAN_IDA',
    'width' => '10%',
    'name' => 'sgt_tamung_sgt_duan_name',
  ),
),
);
