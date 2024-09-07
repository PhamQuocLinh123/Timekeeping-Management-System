<?php
$module_name = 'sgt_vattumua';
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
      'loai' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_LOAI',
        'width' => '10%',
        'default' => true,
        'name' => 'loai',
      ),
      'ncc' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_NCC',
        'id' => 'ACCOUNT_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'ncc',
      ),
      'sgt_vattumua_sgt_muahang_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_VATTUMUA_SGT_MUAHANG_FROM_SGT_MUAHANG_TITLE',
        'id' => 'SGT_VATTUMUA_SGT_MUAHANGSGT_MUAHANG_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_vattumua_sgt_muahang_name',
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
