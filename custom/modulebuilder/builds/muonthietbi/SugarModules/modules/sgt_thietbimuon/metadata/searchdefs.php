<?php
$module_name = 'sgt_thietbimuon';
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
      'sgt_thietbimuon_sgt_muonthietbi_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_SGT_THIETBIMUON_SGT_MUONTHIETBI_FROM_SGT_MUONTHIETBI_TITLE',
        'id' => 'SGT_THIETBIMUON_SGT_MUONTHIETBISGT_MUONTHIETBI_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'sgt_thietbimuon_sgt_muonthietbi_name',
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
