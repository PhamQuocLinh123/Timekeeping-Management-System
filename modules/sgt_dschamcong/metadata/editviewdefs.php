<?php
$module_name = 'sgt_dschamcong';
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
            'name' => 'ngaychamcong',
            'label' => 'LBL_NGAYCHAMCONG',
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
            'name' => 'dacbiet',
            'studio' => 'visible',
            'label' => 'LBL_DACBIET',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sgt_dschamcong_sgt_chamcong_name',
            'label' => 'LBL_SGT_DSCHAMCONG_SGT_CHAMCONG_FROM_SGT_CHAMCONG_TITLE',
          ),
          1 => 
          array (
            'name' => 'tonggiolam',
            'label' => 'LBL_TONGGIOLAM',
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
            'name' => 'duan',
            'studio' => 'visible',
            'label' => 'LBL_DUAN',
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
      ),
    ),
  ),
);
;
?>
