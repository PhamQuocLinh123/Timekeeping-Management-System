<?php
$module_name = 'sgt_muonthietbi';
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
      'ngaymuon' => 
      array (
        'type' => 'date',
        'label' => 'LBL_NGAYMUON',
        'width' => '10%',
        'default' => true,
        'name' => 'ngaymuon',
      ),
      'nguoimuon' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_NGUOIMUON',
        'id' => 'SGT_NHANVIEN_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'nguoimuon',
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
      'tinhtrang' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TINHTRANG',
        'width' => '10%',
        'default' => true,
        'name' => 'tinhtrang',
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
