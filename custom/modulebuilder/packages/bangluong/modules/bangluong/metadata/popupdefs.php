<?php
$popupMeta = array (
    'moduleMain' => 'h_bangluong',
    'varName' => 'h_bangluong',
    'orderBy' => 'h_bangluong.name',
    'whereClauses' => array (
  'name' => 'h_bangluong.name',
  'sgt_bangluong_sgt_duan_name' => 'sgt_bangluong.sgt_bangluong_sgt_duan_name',
),
    'searchInputs' => array (
  1 => 'name',
  5 => 'sgt_bangluong_sgt_duan_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'sgt_bangluong_sgt_duan_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_BANGLUONG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
    'id' => 'SGT_BANGLUONG_SGT_DUANSGT_DUAN_IDA',
    'width' => '10%',
    'name' => 'sgt_bangluong_sgt_duan_name',
  ),
),
);
