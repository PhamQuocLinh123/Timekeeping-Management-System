<?php
$popupMeta = array (
    'moduleMain' => 'h_doi',
    'varName' => 'h_doi',
    'orderBy' => 'h_doi.name',
    'whereClauses' => array (
  'tendoi' => 'h_doi.tendoi',
  'doitruong' => 'h_doi.doitruong',
),
    'searchInputs' => array (
  4 => 'tendoi',
  5 => 'doitruong',
),
    'searchdefs' => array (
  'tendoi' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TENDOI',
    'width' => '10%',
    'name' => 'tendoi',
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
);
