<?php
$module_name = 'sgt_atld';
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
          0 => 'name',
          1 => 
          array (
            'name' => 'loai',
            'studio' => 'visible',
            'label' => 'LBL_LOAI',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'sgt_atld_sgt_nhanvien_name',
            'label' => 'LBL_SGT_BHTN_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
          ),
          1 => 
          array (
            'name' => 'tinhtrang',
            'studio' => 'visible',
            'label' => 'LBL_TINHTRANG',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ngayhieuluc',
            'label' => 'LBL_NGAYHIEULUC',
          ),
          1 => 
          array (
            'name' => 'ngayhethan',
            'label' => 'LBL_NGAYHETHAN',
          ),
        ),
        3 => 
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
