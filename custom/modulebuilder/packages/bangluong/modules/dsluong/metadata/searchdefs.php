<?php
$module_name = 'sgt_dsluong';
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
      'ma_nv' => 
      array (
        'type' => 'int',
        'label' => 'LBL_MA_NV',
        'width' => '10%',
        'default' => true,
        'name' => 'ma_nv',
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
      'sgt_dsluong_sgt_nhanvien_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_DSLUONG_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
        'id' => 'SGT_DSLUONG_SGT_NHANVIENSGT_NHANVIEN_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_dsluong_sgt_nhanvien_name',
      ),
      'ma_nv' => 
      array (
        'type' => 'int',
        'label' => 'LBL_MA_NV',
        'width' => '10%',
        'default' => true,
        'name' => 'ma_nv',
      ),
      'tungay' => 
      array (
        'type' => 'date',
        'label' => 'LBL_TUNGAY',
        'width' => '10%',
        'default' => true,
        'name' => 'tungay',
      ),
      'denngay' => 
      array (
        'type' => 'date',
        'label' => 'LBL_DENNGAY',
        'width' => '10%',
        'default' => true,
        'name' => 'denngay',
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
