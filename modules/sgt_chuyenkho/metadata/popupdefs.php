<?php
$popupMeta = array (
    'moduleMain' => 'sgt_chuyenkho',
    'varName' => 'sgt_chuyenkho',
    'orderBy' => 'sgt_chuyenkho.name',
    'whereClauses' => array (
  'name' => 'sgt_chuyenkho.name',
  'ngaychuyen' => 'sgt_chuyenkho.ngaychuyen',
  'tinhtrang' => 'sgt_chuyenkho.tinhtrang',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'ngaychuyen',
  5 => 'tinhtrang',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'ngaychuyen' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYCHUYEN',
    'width' => '10%',
    'name' => 'ngaychuyen',
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
