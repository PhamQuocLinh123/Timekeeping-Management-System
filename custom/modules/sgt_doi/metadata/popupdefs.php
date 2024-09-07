<?php
$popupMeta = array (
    'moduleMain' => 'h_doi',
    'varName' => 'h_doi',
    'orderBy' => 'h_doi.name',
    'whereClauses' => array (
  'doitruong' => 'h_doi.doitruong',
  'name' => 'sgt_doi.name',
),
    'searchInputs' => array (
  5 => 'doitruong',
  6 => 'name',
),
    'searchdefs' => array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'name' => 'name',
  ),
  'doitruong' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DOITRUONG',
    'id' => 'H_NHANVIEN_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'doitruong',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'DOITRUONG' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DOITRUONG',
    'id' => 'SGT_NHANVIEN_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'doitruong',
  ),
),
);
