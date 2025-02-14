<?php
$popupMeta = array (
    'moduleMain' => 'sgt_vattumua',
    'varName' => 'sgt_vattumua',
    'orderBy' => 'sgt_vattumua.name',
    'whereClauses' => array (
  'name' => 'sgt_vattumua.name',
  'ma_vt' => 'sgt_vattumua.ma_vt',
  'sgt_vattumua_sgt_muahang_name' => 'sgt_vattumua.sgt_vattumua_sgt_muahang_name',
  'loai' => 'sgt_vattumua.loai',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'ma_vt',
  5 => 'sgt_vattumua_sgt_muahang_name',
  6 => 'loai',
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
  'sgt_vattumua_sgt_muahang_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_VATTUMUA_SGT_MUAHANG_FROM_SGT_MUAHANG_TITLE',
    'id' => 'SGT_VATTUMUA_SGT_MUAHANGSGT_MUAHANG_IDA',
    'width' => '10%',
    'name' => 'sgt_vattumua_sgt_muahang_name',
  ),
),
);
