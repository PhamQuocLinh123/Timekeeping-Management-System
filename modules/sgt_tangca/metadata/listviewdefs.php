<?php
$module_name = 'sgt_tangca';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'LOAINGAY' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_LOAINGAY',
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
  'SGT_CHAMCONG_SGT_DUAN_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_CHAMCONG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
    'id' => 'SGT_CHAMCONG_SGT_DUANSGT_DUAN_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
