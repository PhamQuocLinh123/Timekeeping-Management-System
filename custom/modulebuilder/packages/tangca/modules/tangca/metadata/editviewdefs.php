<?php
$module_name = 'sgt_tangca';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
            'name' => 'sgt_tangca_sgt_duan_name',
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
        2 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
