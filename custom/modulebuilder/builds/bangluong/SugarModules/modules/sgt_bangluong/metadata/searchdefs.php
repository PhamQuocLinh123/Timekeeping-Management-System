<?php
$module_name = 'sgt_bangluong';
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
      'sgt_bangluong_sgt_duan_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_BANGLUONG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
        'id' => 'SGT_BANGLUONG_SGT_DUANSGT_DUAN_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_bangluong_sgt_duan_name',
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
