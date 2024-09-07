<?php
$module_name = 'sgt_tamung';
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
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
      ),
      'ma_nv' => 
      array (
        'type' => 'int',
        'label' => 'LBL_MA_NV',
        'width' => '10%',
        'default' => true,
        'name' => 'ma_nv',
      ),
      'ngaytamung' => 
      array (
        'type' => 'date',
        'label' => 'LBL_NGAYTAMUNG',
        'width' => '10%',
        'default' => true,
        'name' => 'ngaytamung',
      ),
      'tinhtrangtamung' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TINHTRANGTAMUNG',
        'width' => '10%',
        'default' => true,
        'name' => 'tinhtrangtamung',
      ),
      'sgt_tamung_sgt_duan_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_TAMUNG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
        'id' => 'SGT_TAMUNG_SGT_DUANSGT_DUAN_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_tamung_sgt_duan_name',
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
