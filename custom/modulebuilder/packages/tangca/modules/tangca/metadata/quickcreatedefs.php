<?php
$module_name = 'sgt_tangca';
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
            'name' => 'ngaytangca',
            'label' => 'LBL_NGAYTANGCA',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'loaingay',
            'studio' => 'visible',
            'label' => 'LBL_LOAINGAY',
          ),
          1 => 
          array (
            'name' => 'heso',
            'studio' => 'visible',
            'label' => 'LBL_HESO',
          ),
        ),
      ),
    ),
  ),
);
;
?>
