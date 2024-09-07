<?php
$module_name = 'sgt_thietbitra';
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
      'ma_vt' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MA_VT',
        'width' => '10%',
        'default' => true,
        'name' => 'ma_vt',
      ),
      'tenkho' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_TENKHO',
        'id' => 'SGT_TENKHO_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'tenkho',
      ),
      'sgt_thietbitra_sgt_trathietbi_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_THIETBITRA_SGT_TRATHIETBI_FROM_SGT_TRATHIETBI_TITLE',
        'id' => 'SGT_THIETBITRA_SGT_TRATHIETBISGT_TRATHIETBI_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_thietbitra_sgt_trathietbi_name',
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
