<?php
$module_name = 'sgt_tonghopchamcong';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'TUNGAY' => 
  array (
    'type' => 'date',
    'label' => 'LBL_TUNGAY',
    'width' => '10%',
    'default' => true,
  ),
  'DENNGAY' => 
  array (
    'type' => 'date',
    'label' => 'LBL_DENNGAY',
    'width' => '10%',
    'default' => true,
  ),
  'DUAN' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DUAN',
    'id' => 'SGT_DUAN_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TONGNHANVIEN' => 
  array (
    'type' => 'int',
    'label' => 'LBL_TONGNHANVIEN',
    'width' => '10%',
    'default' => true,
  ),
  'TONGGIOCONG' => 
  array (
    'type' => 'float',
    'label' => 'LBL_TONGGIOCONG',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
