<?php
$module_name = 'sgt_dstbm';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'ma_nv' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MA_NV',
        'width' => '10%',
        'default' => true,
        'name' => 'ma_nv',
      ),
      'ngay_tbm' => 
      array (
        'type' => 'date',
        'label' => 'LBL_NGAY_TBM',
        'width' => '10%',
        'default' => true,
        'name' => 'ngay_tbm',
      ),
      'sgt_dstbm_sgt_tbm_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_DSTBM_SGT_TBM_FROM_SGT_TBM_TITLE',
        'id' => 'SGT_DSTBM_SGT_TBMSGT_TBM_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_dstbm_sgt_tbm_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
