<?php
$popupMeta = array (
    'moduleMain' => 'sgt_vattunhap',
    'varName' => 'sgt_vattunhap',
    'orderBy' => 'sgt_vattunhap.name',
    'whereClauses' => array (
  'name' => 'sgt_vattunhap.name',
  'ma_vt' => 'sgt_vattunhap.ma_vt',
  'sgt_vattunhap_sgt_nhapkho_name' => 'sgt_vattunhap.sgt_vattunhap_sgt_nhapkho_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'ma_vt',
  5 => 'sgt_vattunhap_sgt_nhapkho_name',
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
  'sgt_vattunhap_sgt_nhapkho_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_VATTUNHAP_SGT_NHAPKHO_FROM_SGT_NHAPKHO_TITLE',
    'id' => 'SGT_VATTUNHAP_SGT_NHAPKHOSGT_NHAPKHO_IDA',
    'width' => '10%',
    'name' => 'sgt_vattunhap_sgt_nhapkho_name',
  ),
),
);
