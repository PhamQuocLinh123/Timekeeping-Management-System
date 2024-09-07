<?php
$module_name = 'sgt_chamcong';
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
  'SGT_CHAMCONG_SGT_DUAN_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_CHAMCONG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
    'id' => 'SGT_CHAMCONG_SGT_DUANSGT_DUAN_IDA',
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
  'TONGGIOSANG' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TONGGIOSANG',
    'width' => '10%',
    'default' => true,
  ),
  'TONGGIOCHIEU' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_TONGGIOCHIEU',
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
  'DACBIET' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_DACBIET',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
