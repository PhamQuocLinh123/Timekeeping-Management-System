<?php
$module_name = 'sgt_calamviec';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'GIOVAO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GIOVAO',
    'width' => '10%',
    'default' => true,
  ),
  'GIORA' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_GIORA',
    'width' => '10%',
    'default' => true,
  ),
  'SGT_CALAMVIEC_SGT_DUAN_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_CALAMVIEC_SGT_DUAN_FROM_SGT_DUAN_TITLE',
    'id' => 'SGT_CALAMVIEC_SGT_DUANSGT_DUAN_IDA',
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
