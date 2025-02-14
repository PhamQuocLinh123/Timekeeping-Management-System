<?php
$module_name = 'sgt_dschamcong';
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
            'name' => 'ma_nv',
            'label' => 'LBL_MA_NV',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ngaychamcong',
            'label' => 'LBL_NGAYCHAMCONG',
          ),
          1 => 
          array (
            'name' => 'dacbiet',
            'studio' => 'visible',
            'label' => 'LBL_DACBIET',
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
          1 => 
          array (
            'name' => 'sgt_dschamcong_sgt_chamcong_name',
            'label' => 'LBL_SGT_DSCHAMCONG_SGT_CHAMCONG_FROM_SGT_CHAMCONG_TITLE',
          ),
        ),
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'tonggiolam',
            'label' => 'LBL_TONGGIOLAM',
          ),
          1 => 
          array (
            'name' => 'tenca',
            'studio' => 'visible',
            'label' => 'LBL_TENCA',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'ma_cc',
            'label' => 'LBL_MA_CC',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'heso',
            'studio' => 'visible',
            'label' => 'LBL_HESO',
          ),
          1 => 
          array (
            'name' => 'loaingay',
            'studio' => 'visible',
            'label' => 'LBL_LOAINGAY',
          ),
        ),
      ),
    ),
  ),
);
;
?>
