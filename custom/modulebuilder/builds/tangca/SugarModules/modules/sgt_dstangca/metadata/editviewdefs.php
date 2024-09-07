<?php
$module_name = 'sgt_dstangca';
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
            'name' => 'ma_nv',
            'label' => 'LBL_MA_NV',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'batdau',
            'label' => 'LBL_BATDAU',
          ),
          1 => 
          array (
            'name' => 'ketthuc',
            'label' => 'LBL_KETTHUC',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ngaytangca',
            'label' => 'LBL_NGAYTANGCA',
          ),
          1 => 
          array (
            'name' => 'doi',
            'studio' => 'visible',
            'label' => 'LBL_DOI',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sgt_dstangca_sgt_tangca_name',
          ),
          1 => 
          array (
            'name' => 'duan',
            'studio' => 'visible',
            'label' => 'LBL_DUAN',
          ),
        ),
        4 => 
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
