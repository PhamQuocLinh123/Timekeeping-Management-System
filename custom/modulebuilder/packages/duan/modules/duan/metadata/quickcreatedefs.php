<?php
$module_name = 'sgt_duan';
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
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'ngaybatdau',
            'label' => 'LBL_NGAYBATDAU',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ngaydukienketthuc',
            'label' => 'LBL_NGAYDUKIENKETTHUC',
          ),
          1 => 
          array (
            'name' => 'ngayketthuc',
            'label' => 'LBL_NGAYKETTHUC',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tongtiennhancong',
            'label' => 'LBL_TONGTIENNHANCONG',
          ),
        ),
      ),
    ),
  ),
);
;
?>
