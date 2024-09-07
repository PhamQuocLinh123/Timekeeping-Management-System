<?php
$module_name = 'sgt_atld';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
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
      'loai' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_LOAI',
        'width' => '10%',
        'default' => true,
        'name' => 'loai',
      ),
      'tinhtrang' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TINHTRANG',
        'width' => '10%',
        'default' => true,
        'name' => 'tinhtrang',
      ),
      'sgt_atld_sgt_nhanvien_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_BHTN_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
        'id' => 'SGT_BHTN_SGT_NHANVIENSGT_NHANVIEN_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_atld_sgt_nhanvien_name',
      ),
      'ngayhethan' => 
      array (
        'type' => 'date',
        'label' => 'LBL_NGAYHETHAN',
        'width' => '10%',
        'default' => true,
        'name' => 'ngayhethan',
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
