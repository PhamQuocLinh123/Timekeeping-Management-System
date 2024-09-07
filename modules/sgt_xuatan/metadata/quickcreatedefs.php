<?php
$module_name = 'sgt_xuatan';
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
            'name' => 'ngayxuatan',
            'label' => 'LBL_NGAYXUATAN',
          ),
          1 => 
          array (
            'name' => 'soluong_nv',
            'label' => 'LBL_SOLUONG_NV',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sl_xuatan',
            'label' => 'LBL_SL_XUATAN',
          ),
          1 => 
          array (
            'name' => 'tinhtrang',
            'studio' => 'visible',
            'label' => 'LBL_TINHTRANG',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'duan',
            'studio' => 'visible',
            'label' => 'LBL_DUAN',
          ),
        ),
      ),
    ),
  ),
);
;
?>
