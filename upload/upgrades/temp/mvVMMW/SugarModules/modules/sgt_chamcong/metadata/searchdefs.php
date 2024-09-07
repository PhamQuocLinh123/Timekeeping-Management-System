<?php
$module_name = 'sgt_chamcong';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'type' => 'name',
        'link' => true,
        'label' => 'LBL_NAME',
        'width' => '10%',
        'default' => true,
        'name' => 'name',
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
      'ma_nv' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MA_NV',
        'width' => '10%',
        'default' => true,
        'name' => 'ma_nv',
      ),
      'sgt_chamcong_sgt_duan_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_CHAMCONG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
        'id' => 'SGT_CHAMCONG_SGT_DUANSGT_DUAN_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_chamcong_sgt_duan_name',
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
