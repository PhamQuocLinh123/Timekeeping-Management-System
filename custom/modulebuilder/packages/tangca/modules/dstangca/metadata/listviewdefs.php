<?php
$module_name = 'sgt_dstangca';
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
  'BATDAU' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_BATDAU',
    'width' => '10%',
    'default' => true,
  ),
  'KETTHUC' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_KETTHUC',
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
  'NGAYTANGCA' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYTANGCA',
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
);
;
?>
