<?php
$module_name = 'sgt_tonghopchamcong';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
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
      'tungay' => 
      array (
        'type' => 'date',
        'label' => 'LBL_TUNGAY',
        'width' => '10%',
        'default' => true,
        'name' => 'tungay',
      ),
      'denngay' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DENNGAY',
        'width' => '10%',
        'default' => true,
        'name' => 'denngay',
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
