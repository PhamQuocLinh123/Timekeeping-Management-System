<?php
$module_name = 'sgt_nhanvien';
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
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'ngaysinh',
            'label' => 'LBL_NGAYSINH',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sodienthoai',
            'label' => 'LBL_SODIENTHOAI',
          ),
          1 => 
          array (
            'name' => 'cccd',
            'label' => 'LBL_CCCD',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ma_nv',
            'label' => 'LBL_MA_NV',
          ),
          1 => 
          array (
            'name' => 'baohiem',
            'label' => 'LBL_BAOHIEM',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'diachi',
            'label' => 'LBL_DIACHI',
          ),
          1 => 
          array (
            'name' => 'chucvu',
            'label' => 'LBL_CHUCVU',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'phongban',
            'label' => 'LBL_PHONGBAN',
          ),
          1 => 
          array (
            'name' => 'bophan',
            'studio' => 'visible',
            'label' => 'LBL_BOPHAN',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'luongthoathuan',
            'label' => 'LBL_LUONGTHOATHUAN',
          ),
          1 => 
          array (
            'name' => 'nganhang',
            'label' => 'LBL_NGANHANG',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'sotaikhoan',
            'label' => 'LBL_SOTAIKHOAN',
          ),
          1 => 
          array (
            'name' => 'dienthoaikhancap',
            'label' => 'LBL_DIENTHOAIKHANCAP',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'hinhanh',
            'studio' => 'visible',
            'label' => 'LBL_HINHANH',
          ),
          1 => 
          array (
            'name' => 'masothue',
            'label' => 'LBL_MASOTHUE',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'sgt_nhanvien_sgt_doi_name',
          ),
        ),
        9 => 
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
