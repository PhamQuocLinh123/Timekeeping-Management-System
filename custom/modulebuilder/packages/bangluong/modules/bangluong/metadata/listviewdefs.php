<?php
$module_name = 'sgt_bangluong';
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
  'SGT_BANGLUONG_SGT_DUAN_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_BANGLUONG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
    'id' => 'SGT_BANGLUONG_SGT_DUANSGT_DUAN_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
