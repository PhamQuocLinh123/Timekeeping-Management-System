<?php
$module_name = 'sgt_vattumua';
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
            'name' => 'vattu',
            'studio' => 'visible',
            'label' => 'LBL_VATTU',
          ),
          1 => 
          array (
            'name' => 'ma_vt',
            'label' => 'LBL_MA_VT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'soluong',
            'label' => 'LBL_SOLUONG',
          ),
          1 => 
          array (
            'name' => 'dvt',
            'studio' => 'visible',
            'label' => 'LBL_DVT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'dongia',
            'label' => 'LBL_DONGIA',
          ),
          1 => 
          array (
            'name' => 'ncc',
            'studio' => 'visible',
            'label' => 'LBL_NCC',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'loai',
            'studio' => 'visible',
            'label' => 'LBL_LOAI',
          ),
          1 => 
          array (
            'name' => 'sgt_vattumua_sgt_muahang_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'tenkho',
            'studio' => 'visible',
            'label' => 'LBL_TENKHO',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
