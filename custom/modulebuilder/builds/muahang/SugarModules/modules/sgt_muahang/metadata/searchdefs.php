<?php
$module_name = 'sgt_muahang';
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
      'ngaydexuat' => 
      array (
        'type' => 'date',
        'label' => 'LBL_NGAYDEXUAT',
        'width' => '10%',
        'default' => true,
        'name' => 'ngaydexuat',
      ),
      'pheduyet' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_PHEDUYET',
        'width' => '10%',
        'default' => true,
        'name' => 'pheduyet',
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
      'nguoidexuat' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_NGUOIDEXUAT',
        'id' => 'SGT_NHANVIEN_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'nguoidexuat',
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
