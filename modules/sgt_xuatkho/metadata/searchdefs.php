<?php
$module_name = 'sgt_xuatkho';
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
      'tinhtrang' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TINHTRANG',
        'width' => '10%',
        'default' => true,
        'name' => 'tinhtrang',
      ),
      'nguoinhan' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_NGUOINHAN',
        'id' => 'SGT_NHANVIEN_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'nguoinhan',
      ),
      'tenkho' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_TENKHO',
        'id' => 'SGT_TENKHO_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'tenkho',
      ),
      'ngayxuat' => 
      array (
        'type' => 'date',
        'label' => 'LBL_NGAYXUAT',
        'width' => '10%',
        'default' => true,
        'name' => 'ngayxuat',
      ),
      'duan' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_DUAN',
        'id' => 'SGT_DUAN_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'duan',
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
