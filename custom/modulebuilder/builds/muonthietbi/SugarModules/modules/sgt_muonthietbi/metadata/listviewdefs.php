<?php
$module_name = 'sgt_muonthietbi';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'NGAYMUON' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYMUON',
    'width' => '10%',
    'default' => true,
  ),
  'NGUOIMUON' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NGUOIMUON',
    'id' => 'SGT_NHANVIEN_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'NGAYDUKIEN' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYDUKIEN',
    'width' => '10%',
    'default' => true,
  ),
  'XACNHAN' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_XACNHAN',
    'width' => '10%',
    'default' => true,
  ),
  'TINHTRANG' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TINHTRANG',
    'width' => '10%',
    'default' => true,
  ),
  'DUAN' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DUAN',
    'id' => 'SGT_DUAN_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
