<?php
$module_name = 'sgt_xuatan';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'SOLUONG_NV' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SOLUONG_NV',
    'width' => '10%',
    'default' => true,
  ),
  'SL_XUATAN' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SL_XUATAN',
    'width' => '10%',
    'default' => true,
  ),
  'TINHTRANG' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_TINHTRANG',
    'width' => '10%',
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
