<?php
$popupMeta = array (
    'moduleMain' => 'sgt_xuatan',
    'varName' => 'sgt_xuatan',
    'orderBy' => 'sgt_xuatan.name',
    'whereClauses' => array (
  'name' => 'sgt_xuatan.name',
  'duan' => 'sgt_xuatan.duan',
  'tinhtrang' => 'sgt_xuatan.tinhtrang',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'duan',
  5 => 'tinhtrang',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
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
  'tinhtrang' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TINHTRANG',
    'width' => '10%',
    'name' => 'tinhtrang',
  ),
),
);
