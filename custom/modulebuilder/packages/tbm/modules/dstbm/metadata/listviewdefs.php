<?php
$module_name = 'sgt_dstbm';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'MA_NV' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MA_NV',
    'width' => '10%',
    'default' => true,
  ),
  'CHUCDANH' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CHUCDANH',
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
  'SGT_DSTBM_SGT_TBM_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_DSTBM_SGT_TBM_FROM_SGT_TBM_TITLE',
    'id' => 'SGT_DSTBM_SGT_TBMSGT_TBM_IDA',
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
