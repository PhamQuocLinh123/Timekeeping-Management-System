<?php
$popupMeta = array (
    'moduleMain' => 'sgt_tbm',
    'varName' => 'sgt_tbm',
    'orderBy' => 'sgt_tbm.name',
    'whereClauses' => array (
  'name' => 'sgt_tbm.name',
  'calamviec' => 'sgt_tbm.calamviec',
  'duan' => 'sgt_tbm.duan',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'calamviec',
  5 => 'duan',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'calamviec' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_CALAMVIEC',
    'width' => '10%',
    'name' => 'calamviec',
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
