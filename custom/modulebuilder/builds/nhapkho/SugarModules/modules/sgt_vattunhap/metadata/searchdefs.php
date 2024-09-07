<?php
$module_name = 'sgt_vattunhap';
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
      'sgt_vattunhap_sgt_nhapkho_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_VATTUNHAP_SGT_NHAPKHO_FROM_SGT_NHAPKHO_TITLE',
        'id' => 'SGT_VATTUNHAP_SGT_NHAPKHOSGT_NHAPKHO_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_vattunhap_sgt_nhapkho_name',
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
