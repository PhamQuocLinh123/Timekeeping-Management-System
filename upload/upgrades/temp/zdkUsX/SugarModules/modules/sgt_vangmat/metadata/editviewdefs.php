<?php
$module_name = 'sgt_vangmat';
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
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'sgt_vangmat_sgt_nhanvien_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ma_nv',
            'studio' => 'visible',
            'label' => 'LBL_MA_NV',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tungay',
            'label' => 'LBL_TUNGAY',
          ),
          1 => 
          array (
            'name' => 'denngay',
            'label' => 'LBL_DENNGAY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'loaivangmat',
            'label' => 'LBL_LOAIVANGMAT',
          ),
          1 => 
          array (
            'name' => 'pheduyet',
            'label' => 'LBL_PHEDUYET',
          ),
        ),
      ),
    ),
  ),
);
;
?>
