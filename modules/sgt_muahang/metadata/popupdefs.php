<?php
$popupMeta = array (
    'moduleMain' => 'sgt_muahang',
    'varName' => 'sgt_muahang',
    'orderBy' => 'sgt_muahang.name',
    'whereClauses' => array (
  'name' => 'sgt_muahang.name',
  'pheduyet' => 'sgt_muahang.pheduyet',
  'tinhtrang' => 'sgt_muahang.tinhtrang',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'pheduyet',
  5 => 'tinhtrang',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'pheduyet' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PHEDUYET',
    'width' => '10%',
    'name' => 'pheduyet',
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
