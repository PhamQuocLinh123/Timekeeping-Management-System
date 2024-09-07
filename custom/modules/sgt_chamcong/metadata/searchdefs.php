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
      'loaingay' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_LOAINGAY',
        'width' => '10%',
        'default' => true,
        'name' => 'loaingay',
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
      'loaigio' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_LOAIGIO',
        'width' => '10%',
        'default' => true,
        'name' => 'loaigio',
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
