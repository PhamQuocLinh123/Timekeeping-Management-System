<?php
$module_name = 'sgt_dsluong';
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
            'name' => 'sgt_dsluong_sgt_nhanvien_name',
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
            'name' => 'tungay',
            'label' => 'LBL_TUNGAY',
          ),
          1 => 
          array (
            'name' => 'denngay',
            'label' => 'LBL_DENNGAY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'luongcoban',
            'label' => 'LBL_LUONGCOBAN',
          ),
          1 => 
          array (
            'name' => 'tonggiohanhchinh',
            'label' => 'LBL_TONGGIOHANHCHINH',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tonggiotangca',
            'label' => 'LBL_TONGGIOTANGCA',
          ),
          1 => 
          array (
            'name' => 'tonggiongayle',
            'label' => 'LBL_TONGGIONGAYLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ngaycongquydoi',
            'label' => 'LBL_NGAYCONGQUYDOI',
          ),
          1 => 
          array (
            'name' => 'tonggio_cn',
            'label' => 'LBL_TONGGIO_CN',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'tongtienluong',
            'label' => 'LBL_TONGTIENLUONG',
          ),
          1 => 
          array (
            'name' => 'sgt_dsluong_sgt_bangluong_name',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'nganhang',
            'studio' => 'visible',
            'label' => 'LBL_NGANHANG',
          ),
          1 => 
          array (
            'name' => 'sotaikhoan',
            'studio' => 'visible',
            'label' => 'LBL_SOTAIKHOAN',
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
