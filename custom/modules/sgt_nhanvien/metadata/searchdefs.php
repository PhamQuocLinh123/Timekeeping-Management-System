<?php
$module_name = 'sgt_nhanvien';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'sodienthoai' => 
      array (
        'type' => 'phone',
        'label' => 'LBL_SODIENTHOAI',
        'width' => '10%',
        'default' => true,
        'name' => 'sodienthoai',
      ),
      'cccd' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_CCCD',
        'width' => '10%',
        'default' => true,
        'name' => 'cccd',
      ),
      'bophan' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_BOPHAN',
        'width' => '10%',
        'default' => true,
        'name' => 'bophan',
      ),
      'baohiem' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_BAOHIEM',
        'width' => '10%',
        'default' => true,
        'name' => 'baohiem',
      ),
      'phongban' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_PHONGBAN',
        'width' => '10%',
        'default' => true,
        'name' => 'phongban',
      ),
      'ma_nv' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MA_NV',
        'width' => '10%',
        'default' => true,
        'name' => 'ma_nv',
      ),
      'gioitinh' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_GIOITINH',
        'width' => '10%',
        'default' => true,
        'name' => 'gioitinh',
      ),
      'cc' => 
      array (
        'type' => 'bool',
        'label' => 'LBL_CC',
        'width' => '10%',
        'default' => true,
        'name' => 'cc',
      ),
      'sgt_nhanvien_sgt_doi_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE',
        'id' => 'SGT_NHANVIEN_SGT_DOISGT_DOI_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_nhanvien_sgt_doi_name',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
