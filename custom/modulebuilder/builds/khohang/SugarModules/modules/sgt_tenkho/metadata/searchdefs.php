<?php
$module_name = 'sgt_tenkho';
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
      'vitri' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_VITRI',
        'width' => '10%',
        'default' => true,
        'name' => 'vitri',
      ),
      'thukho' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_THUKHO',
        'id' => 'SGT_NHANVIEN_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'thukho',
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
