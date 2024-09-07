<?php
$module_name = 'sgt_chamcong';
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
            'name' => 'ngaychamcong',
            'label' => 'LBL_NGAYCHAMCONG',
          ),
          1 => 
          array (
            'name' => 'sgt_nhanvien_sgt_chamcong_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sgt_chamcong_sgt_duan_name',
            'label' => 'LBL_SGT_CHAMCONG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
          ),
          1 => 
          array (
            'name' => 'ma_nv',
            'label' => 'LBL_MA_NV',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'heso',
            'studio' => 'visible',
            'label' => 'LBL_HESO',
          ),
          1 => 
          array (
            'name' => 'dacbiet',
            'studio' => 'visible',
            'label' => 'LBL_DACBIET',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sang',
            'studio' => 'visible',
            'label' => 'LBL_SANG',
          ),
          1 => 
          array (
            'name' => 'sangphut',
            'studio' => 'visible',
            'label' => 'LBL_SANGPHUT',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'chieu',
            'studio' => 'visible',
            'label' => 'LBL_CHIEU',
          ),
          1 => 
          array (
            'name' => 'chieuphut',
            'studio' => 'visible',
            'label' => 'LBL_CHIEUPHUT',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'tonggiolam',
            'label' => 'LBL_TONGGIOLAM',
          ),
          1 => 
          array (
            'name' => 'loaingay',
            'studio' => 'visible',
            'label' => 'LBL_LOAINGAY',
          ),
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
      ),
    ),
  ),
);
;
?>
