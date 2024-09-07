<?php
$popupMeta = array (
    'moduleMain' => 'sgt_thietbimuon',
    'varName' => 'sgt_thietbimuon',
    'orderBy' => 'sgt_thietbimuon.name',
    'whereClauses' => array (
  'name' => 'sgt_thietbimuon.name',
  'ma_vt' => 'sgt_thietbimuon.ma_vt',
  'sgt_thietbimuon_sgt_muonthietbi_name' => 'sgt_thietbimuon.sgt_thietbimuon_sgt_muonthietbi_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'ma_vt',
  5 => 'sgt_thietbimuon_sgt_muonthietbi_name',
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
  'sgt_thietbimuon_sgt_muonthietbi_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_THIETBIMUON_SGT_MUONTHIETBI_FROM_SGT_MUONTHIETBI_TITLE',
    'id' => 'SGT_THIETBIMUON_SGT_MUONTHIETBISGT_MUONTHIETBI_IDA',
    'width' => '10%',
    'name' => 'sgt_thietbimuon_sgt_muonthietbi_name',
  ),
),
);
