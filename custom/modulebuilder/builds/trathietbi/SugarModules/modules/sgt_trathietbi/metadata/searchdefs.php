<?php
$module_name = 'sgt_trathietbi';
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
      'nguoitra' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_NGUOITRA',
        'id' => '',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'nguoitra',
      ),
      'ngaytra' => 
      array (
        'type' => 'date',
        'label' => 'LBL_NGAYTRA',
        'width' => '10%',
        'default' => true,
        'name' => 'ngaytra',
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
