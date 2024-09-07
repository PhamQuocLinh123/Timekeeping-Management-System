<?php
$module_name = 'sgt_vattuxuat';
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
            'name' => 'loai',
            'studio' => 'visible',
            'label' => 'LBL_LOAI',
          ),
          1 => 
          array (
            'name' => 'nguoisudung',
            'studio' => 'visible',
            'label' => 'LBL_NGUOISUDUNG',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sl_conlai',
            'label' => 'LBL_SL_CONLAI',
          ),
          1 => 
          array (
            'name' => 'xac_vt',
            'studio' => 'visible',
            'label' => 'LBL_XAC_VT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'sgt_vattuxuat_sgt_xuatkho_name',
          ),
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
