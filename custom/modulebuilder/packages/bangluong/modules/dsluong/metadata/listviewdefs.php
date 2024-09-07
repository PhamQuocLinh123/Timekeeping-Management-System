<?php
$module_name = 'sgt_dsluong';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'MA_NV' => 
  array (
    'type' => 'int',
    'label' => 'LBL_MA_NV',
    'width' => '10%',
    'default' => true,
  ),
  'LUONGCOBAN' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_LUONGCOBAN',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'TONGGIOHANHCHINH' => 
  array (
    'type' => 'float',
    'label' => 'LBL_TONGGIOHANHCHINH',
    'width' => '10%',
    'default' => true,
  ),
  'TONGGIOTANGCA' => 
  array (
    'type' => 'float',
    'label' => 'LBL_TONGGIOTANGCA',
    'width' => '10%',
    'default' => true,
  ),
  'TONGGIONGAYLE' => 
  array (
    'type' => 'float',
    'label' => 'LBL_TONGGIONGAYLE',
    'width' => '10%',
    'default' => true,
  ),
  'NGAYCONGQUYDOI' => 
  array (
    'type' => 'float',
    'label' => 'LBL_NGAYCONGQUYDOI',
    'width' => '10%',
    'default' => true,
  ),
  'TONGTIENLUONG' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_TONGTIENLUONG',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
  ),
  'NGANHANG' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NGANHANG',
    'id' => 'H_NHANVIEN_ID1_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'SOTAIKHOAN' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_SOTAIKHOAN',
    'id' => 'H_NHANVIEN_ID2_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
);
;
?>
