<?php
$module_name = 'sgt_chamcong';
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
            'name' => 'ngaychamcong',
            'label' => 'LBL_NGAYCHAMCONG',
          ),
          1 => 
          array (
            'name' => 'sgt_chamcong_sgt_duan_name',
            'label' => 'LBL_SGT_CHAMCONG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
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
          0 => 
          array (
            'name' => 'loaigio',
            'studio' => 'visible',
            'label' => 'LBL_LOAIGIO',
          ),
          1 => 
          array (
            'name' => 'pheduyet',
            'studio' => 'visible',
            'label' => 'LBL_PHEDUYET',
          ),
        ),
      ),
    ),
  ),
);
;
?>
