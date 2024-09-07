<?php
$module_name = 'sgt_dstbm';
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
            'name' => 'nhanvien',
            'studio' => 'visible',
            'label' => 'LBL_NHANVIEN',
          ),
          1 => 
          array (
            'name' => 'ma_nv',
            'label' => 'LBL_MA_NV',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'chucdanh',
            'label' => 'LBL_CHUCDANH',
          ),
          1 => 
          array (
            'name' => 'sgt_dstbm_sgt_tbm_name',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'giovao',
            'label' => 'LBL_GIOVAO',
          ),
          1 => 
          array (
            'name' => 'giora',
            'label' => 'LBL_GIORA',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
