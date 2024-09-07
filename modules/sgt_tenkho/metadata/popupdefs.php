<?php
$popupMeta = array (
    'moduleMain' => 'sgt_tenkho',
    'varName' => 'sgt_tenkho',
    'orderBy' => 'sgt_tenkho.name',
    'whereClauses' => array (
  'name' => 'sgt_tenkho.name',
  'vitri' => 'sgt_tenkho.vitri',
  'thukho' => 'sgt_tenkho.thukho',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'vitri',
  5 => 'thukho',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'vitri' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VITRI',
    'width' => '10%',
    'name' => 'vitri',
  ),
  'thukho' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_THUKHO',
    'id' => 'SGT_NHANVIEN_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'thukho',
  ),
),
);
