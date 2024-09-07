<?php
$popupMeta = array (
    'moduleMain' => 'sgt_vattuchuyen',
    'varName' => 'sgt_vattuchuyen',
    'orderBy' => 'sgt_vattuchuyen.name',
    'whereClauses' => array (
  'name' => 'sgt_vattuchuyen.name',
  'ma_vt' => 'sgt_vattuchuyen.ma_vt',
  'tenkho' => 'sgt_vattuchuyen.tenkho',
  'sgt_vattuchuyen_sgt_chuyenkho_name' => 'sgt_vattuchuyen.sgt_vattuchuyen_sgt_chuyenkho_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'ma_vt',
  5 => 'tenkho',
  6 => 'sgt_vattuchuyen_sgt_chuyenkho_name',
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
  'sgt_vattuchuyen_sgt_chuyenkho_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_VATTUCHUYEN_SGT_CHUYENKHO_FROM_SGT_CHUYENKHO_TITLE',
    'id' => 'SGT_VATTUCHUYEN_SGT_CHUYENKHOSGT_CHUYENKHO_IDA',
    'width' => '10%',
    'name' => 'sgt_vattuchuyen_sgt_chuyenkho_name',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
    'name' => 'name',
  ),
  'MA_VT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MA_VT',
    'width' => '10%',
    'default' => true,
    'name' => 'ma_vt',
  ),
  'SOLUONG' => 
  array (
    'type' => 'float',
    'label' => 'LBL_SOLUONG',
    'width' => '10%',
    'default' => true,
    'name' => 'soluong',
  ),
  'DVT' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DVT',
    'width' => '10%',
    'default' => true,
    'name' => 'dvt',
  ),
  'SGT_VATTUCHUYEN_SGT_CHUYENKHO_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_VATTUCHUYEN_SGT_CHUYENKHO_FROM_SGT_CHUYENKHO_TITLE',
    'id' => 'SGT_VATTUCHUYEN_SGT_CHUYENKHOSGT_CHUYENKHO_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'sgt_vattuchuyen_sgt_chuyenkho_name',
  ),
  'TENKHO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_TENKHO',
    'id' => 'SGT_TENKHO_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
),
);
