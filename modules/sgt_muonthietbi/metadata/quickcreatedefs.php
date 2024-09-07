<?php
$module_name = 'sgt_muonthietbi';
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
            'name' => 'ngaymuon',
            'label' => 'LBL_NGAYMUON',
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'nguoimuon',
            'studio' => 'visible',
            'label' => 'LBL_NGUOIMUON',
          ),
          1 => 
          array (
            'name' => 'ngaydukien',
            'label' => 'LBL_NGAYDUKIEN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'xacnhan',
            'studio' => 'visible',
            'label' => 'LBL_XACNHAN',
          ),
          1 => 
          array (
            'name' => 'duan',
            'studio' => 'visible',
            'label' => 'LBL_DUAN',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tinhtrang',
            'studio' => 'visible',
            'label' => 'LBL_TINHTRANG',
          ),
          1 => 
          array (
            'name' => 'tenkho',
            'studio' => 'visible',
            'label' => 'LBL_TENKHO',
          ),
        ),
      ),
    ),
  ),
);
;
?>
