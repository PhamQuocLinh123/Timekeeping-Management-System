<?php
$module_name = 'sgt_dstangca';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
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
      'duan' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_DUAN',
        'id' => 'SGT_DUAN_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'duan',
      ),
      'ngaytangca' => 
      array (
        'type' => 'date',
        'label' => 'LBL_NGAYTANGCA',
        'width' => '10%',
        'default' => true,
        'name' => 'ngaytangca',
      ),
      'sgt_dstangca_sgt_tangca_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_DSTANGCA_SGT_TANGCA_FROM_SGT_TANGCA_TITLE',
        'id' => 'SGT_DSTANGCA_SGT_TANGCASGT_TANGCA_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_dstangca_sgt_tangca_name',
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
