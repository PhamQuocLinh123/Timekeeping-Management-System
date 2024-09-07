<?php
$popupMeta = array (
    'moduleMain' => 'sgt_calamviec',
    'varName' => 'sgt_calamviec',
    'orderBy' => 'sgt_calamviec.name',
    'whereClauses' => array (
  'name' => 'sgt_calamviec.name',
  'sgt_calamviec_sgt_duan_name' => 'sgt_calamviec.sgt_calamviec_sgt_duan_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'sgt_calamviec_sgt_duan_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'sgt_calamviec_sgt_duan_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_CALAMVIEC_SGT_DUAN_FROM_SGT_DUAN_TITLE',
    'id' => 'SGT_CALAMVIEC_SGT_DUANSGT_DUAN_IDA',
    'width' => '10%',
    'name' => 'sgt_calamviec_sgt_duan_name',
  ),
),
);
