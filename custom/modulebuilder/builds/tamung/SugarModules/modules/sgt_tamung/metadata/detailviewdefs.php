<?php
$module_name = 'sgt_tamung';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
            'name' => 'ngaytamung',
            'label' => 'LBL_NGAYTAMUNG',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ma_nv',
            'label' => 'LBL_MA_NV',
          ),
          1 => 
          array (
            'name' => 'ngaydenghi',
            'label' => 'LBL_NGAYDENGHI',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nguoidenghi',
            'studio' => 'visible',
            'label' => 'LBL_NGUOIDENGHI',
          ),
          1 => 
          array (
            'name' => 'sotientamung',
            'label' => 'LBL_SOTIENTAMUNG',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tinhtrangtamung',
            'studio' => 'visible',
            'label' => 'LBL_TINHTRANGTAMUNG',
          ),
          1 => 
          array (
            'name' => 'nguoiduyet',
            'studio' => 'visible',
            'label' => 'LBL_NGUOIDUYET',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ngayduyet',
            'label' => 'LBL_NGAYDUYET',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'nguoichitien',
            'studio' => 'visible',
            'label' => 'LBL_NGUOICHITIEN',
          ),
          1 => 
          array (
            'name' => 'ngaychitien',
            'label' => 'LBL_NGAYCHITIEN',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'sgt_tamung_sgt_duan_name',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
