<?php
$module_name = 'sgt_chuyenkho';
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
      'ngaychuyen' => 
      array (
        'type' => 'date',
        'label' => 'LBL_NGAYCHUYEN',
        'width' => '10%',
        'default' => true,
        'name' => 'ngaychuyen',
      ),
      'tukho' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_TUKHO',
        'id' => 'SGT_TENKHO_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'tukho',
      ),
      'denkho' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_DENKHO',
        'id' => 'SGT_TENKHO_ID1_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'denkho',
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
