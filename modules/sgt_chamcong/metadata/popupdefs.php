<?php
$popupMeta = array (
    'moduleMain' => 'sgt_chamcong',
    'varName' => 'sgt_chamcong',
    'orderBy' => 'sgt_chamcong.name',
    'whereClauses' => array (
  'name' => 'sgt_chamcong.name',
  'sgt_chamcong_sgt_duan_name' => 'sgt_chamcong.sgt_chamcong_sgt_duan_name',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'sgt_chamcong_sgt_duan_name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'sgt_chamcong_sgt_duan_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_CHAMCONG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
    'id' => 'SGT_CHAMCONG_SGT_DUANSGT_DUAN_IDA',
    'width' => '10%',
    'name' => 'sgt_chamcong_sgt_duan_name',
  ),
),
);
