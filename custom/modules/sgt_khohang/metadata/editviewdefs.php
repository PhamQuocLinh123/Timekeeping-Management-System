<?php
$module_name = 'sgt_khohang';
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
          0 => 'name',
          1 => 
          array (
            'name' => 'ma_vt',
            'label' => 'LBL_MA_VT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'soluong',
            'label' => 'LBL_SOLUONG',
          ),
          1 => 
          array (
            'name' => 'dvt',
            'studio' => 'visible',
            'label' => 'LBL_DVT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'loai',
            'studio' => 'visible',
            'label' => 'LBL_LOAI',
          ),
          1 => 
          array (
            'name' => 'tenkho',
            'studio' => 'visible',
            'label' => 'LBL_TENKHO',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'nhom_vt',
            'studio' => 'visible',
            'label' => 'LBL_NHOM_VT',
          ),
          1 => 
          array (
            'name' => 'tt_kho',
            'studio' => 'visible',
            'label' => 'LBL_TT_KHO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'vitri',
            'label' => 'LBL_VITRI',
          ),
          1 => 
          array (
            'name' => 'tinhtrang',
            'studio' => 'visible',
            'label' => 'LBL_TINHTRANG',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'taitrong',
            'label' => 'LBL_TAITRONG',
          ),
          1 => 
          array (
            'name' => 'nhanhieu',
            'label' => 'LBL_NHANHIEU',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'ngayvanhanh',
            'label' => 'LBL_NGAYVANHANH',
          ),
          1 => 
          array (
            'name' => 'ngaybaoduong',
            'label' => 'LBL_NGAYBAODUONG',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'ngaykiemdinh',
            'label' => 'LBL_NGAYKIEMDINH',
          ),
          1 => 
          array (
            'name' => 'hankiemdinh',
            'label' => 'LBL_HANKIEMDINH',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'giay_cn',
            'studio' => 'visible',
            'label' => 'LBL_GIAY_CN',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        9 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
