<?php
$popupMeta = array (
    'moduleMain' => 'sgt_trathietbi',
    'varName' => 'sgt_trathietbi',
    'orderBy' => 'sgt_trathietbi.name',
    'whereClauses' => array (
  'name' => 'sgt_trathietbi.name',
  'ngaytra' => 'sgt_trathietbi.ngaytra',
  'nguoitra' => 'sgt_trathietbi.nguoitra',
  'duan' => 'sgt_trathietbi.duan',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'ngaytra',
  5 => 'nguoitra',
  6 => 'duan',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'ngaytra' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYTRA',
    'width' => '10%',
    'name' => 'ngaytra',
  ),
  'nguoitra' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NGUOITRA',
    'id' => '',
    'link' => true,
    'width' => '10%',
    'name' => 'nguoitra',
  ),
  'duan' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DUAN',
    'id' => 'SGT_DUAN_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'duan',
  ),
),
);
