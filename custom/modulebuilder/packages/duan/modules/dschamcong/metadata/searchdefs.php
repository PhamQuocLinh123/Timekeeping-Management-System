<?php
$module_name = 'sgt_dschamcong';
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
      'ngaychamcong' => 
      array (
        'type' => 'date',
        'label' => 'LBL_NGAYCHAMCONG',
        'width' => '10%',
        'default' => true,
        'name' => 'ngaychamcong',
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
      'sgt_dschamcong_sgt_chamcong_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_DSCHAMCONG_SGT_CHAMCONG_FROM_SGT_CHAMCONG_TITLE',
        'id' => 'SGT_DSCHAMCONG_SGT_CHAMCONGSGT_CHAMCONG_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_dschamcong_sgt_chamcong_name',
      ),
      'dacbiet' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_DACBIET',
        'width' => '10%',
        'default' => true,
        'name' => 'dacbiet',
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
