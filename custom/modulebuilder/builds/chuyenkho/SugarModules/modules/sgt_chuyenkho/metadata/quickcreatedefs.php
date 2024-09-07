<?php
$module_name = 'sgt_chuyenkho';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ngaychuyen',
            'label' => 'LBL_NGAYCHUYEN',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tukho',
            'studio' => 'visible',
            'label' => 'LBL_TUKHO',
          ),
          1 => 
          array (
            'name' => 'denkho',
            'studio' => 'visible',
            'label' => 'LBL_DENKHO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tinhtrang',
            'studio' => 'visible',
            'label' => 'LBL_TINHTRANG',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
