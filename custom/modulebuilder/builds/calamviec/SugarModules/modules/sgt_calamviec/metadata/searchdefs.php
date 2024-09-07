<?php
$module_name = 'sgt_calamviec';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 'name',
      1 => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
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
      'tenca' => 
      array (
        'type' => 'enum',
        'studio' => 'visible',
        'label' => 'LBL_TENCA',
        'width' => '10%',
        'default' => true,
        'name' => 'tenca',
      ),
      'sgt_calamviec_sgt_duan_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_CALAMVIEC_SGT_DUAN_FROM_SGT_DUAN_TITLE',
        'id' => 'SGT_CALAMVIEC_SGT_DUANSGT_DUAN_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_calamviec_sgt_duan_name',
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
