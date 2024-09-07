<?php
$popupMeta = array (
    'moduleMain' => 'sgt_dstbm',
    'varName' => 'sgt_dstbm',
    'orderBy' => 'sgt_dstbm.name',
    'whereClauses' => array (
  'name' => 'sgt_dstbm.name',
  'ma_nv' => 'sgt_dstbm.ma_nv',
  'ngay_tbm' => 'sgt_dstbm.ngay_tbm',
  'sgt_dstbm_sgt_tbm_name' => 'sgt_dstbm.sgt_dstbm_sgt_tbm_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'ma_nv',
  5 => 'ngay_tbm',
  6 => 'sgt_dstbm_sgt_tbm_name',
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
  'ngay_tbm' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAY_TBM',
    'width' => '10%',
    'name' => 'ngay_tbm',
  ),
  'sgt_dstbm_sgt_tbm_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_DSTBM_SGT_TBM_FROM_SGT_TBM_TITLE',
    'id' => 'SGT_DSTBM_SGT_TBMSGT_TBM_IDA',
    'width' => '10%',
    'name' => 'sgt_dstbm_sgt_tbm_name',
  ),
),
);
