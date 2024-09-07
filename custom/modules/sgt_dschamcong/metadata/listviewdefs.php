<?php
$module_name = 'sgt_dschamcong';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'MA_NV' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MA_NV',
    'width' => '10%',
    'default' => true,
  ),
  'NGAYCHAMCONG' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYCHAMCONG',
    'width' => '10%',
    'default' => true,
  ),
  'GIOVAO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GIOVAO',
    'width' => '10%',
    'default' => true,
  ),
  'GIORA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GIORA',
    'width' => '10%',
    'default' => true,
  ),
  'HESO' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_HESO',
    'width' => '10%',
    'default' => true,
  ),
  'TONGGIOLAM' => 
  array (
    'type' => 'float',
    'label' => 'LBL_TONGGIOLAM',
    'width' => '10%',
    'default' => true,
  ),
  'LOAINGAY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LOAINGAY',
    'width' => '10%',
    'default' => true,
  ),
  'TENCA' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TENCA',
    'width' => '10%',
  ),
  'DACBIET' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DACBIET',
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
  'SGT_DSCHAMCONG_SGT_CHAMCONG_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_DSCHAMCONG_SGT_CHAMCONG_FROM_SGT_CHAMCONG_TITLE',
    'id' => 'SGT_DSCHAMCONG_SGT_CHAMCONGSGT_CHAMCONG_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
