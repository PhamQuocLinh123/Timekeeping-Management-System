<?php
$module_name = 'sgt_muahang';
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
            'name' => 'ngaydexuat',
            'label' => 'LBL_NGAYDEXUAT',
          ),
          1 => 
          array (
            'name' => 'nguoidexuat',
            'studio' => 'visible',
            'label' => 'LBL_NGUOIDEXUAT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'pheduyet',
            'studio' => 'visible',
            'label' => 'LBL_PHEDUYET',
          ),
          1 => 
          array (
            'name' => 'duan',
            'studio' => 'visible',
            'label' => 'LBL_DUAN',
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
          1 => 
          array (
            'name' => 'ngaydathang',
            'label' => 'LBL_NGAYDATHANG',
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
