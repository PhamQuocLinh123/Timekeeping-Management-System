<?php
$module_name = 'sgt_vattuxuat';
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
      'ma_vt' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MA_VT',
        'width' => '10%',
        'default' => true,
        'name' => 'ma_vt',
      ),
      'nguoisudung' => 
      array (
        'type' => 'relate',
        'studio' => 'visible',
        'label' => 'LBL_NGUOISUDUNG',
        'id' => 'SGT_NHANVIEN_ID_C',
        'link' => true,
        'width' => '10%',
        'default' => true,
        'name' => 'nguoisudung',
      ),
      'ngayxuat' => 
      array (
        'type' => 'date',
        'label' => 'LBL_NGAYXUAT',
        'width' => '10%',
        'default' => true,
        'name' => 'ngayxuat',
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
