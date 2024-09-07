<?php
$module_name = 'sgt_nhapkho';
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
      'ngaynhap' => 
      array (
        'type' => 'date',
        'label' => 'LBL_NGAYNHAP',
        'width' => '10%',
        'default' => true,
        'name' => 'ngaynhap',
      ),
      'tinhtrang' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TINHTRANG',
        'width' => '10%',
        'default' => true,
        'name' => 'tinhtrang',
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
