<?php
$module_name = 'sgt_thietbimuon';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MA_VT' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MA_VT',
    'width' => '10%',
    'default' => true,
  ),
  'SOLUONG' => 
  array (
    'type' => 'int',
    'label' => 'LBL_SOLUONG',
    'width' => '10%',
    'default' => true,
  ),
  'TINHTRANG' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TINHTRANG',
    'width' => '10%',
    'default' => true,
  ),
  'SGT_THIETBIMUON_SGT_MUONTHIETBI_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_THIETBIMUON_SGT_MUONTHIETBI_FROM_SGT_MUONTHIETBI_TITLE',
    'id' => 'SGT_THIETBIMUON_SGT_MUONTHIETBISGT_MUONTHIETBI_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TENKHO' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_TENKHO',
    'id' => 'SGT_TENKHO_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
