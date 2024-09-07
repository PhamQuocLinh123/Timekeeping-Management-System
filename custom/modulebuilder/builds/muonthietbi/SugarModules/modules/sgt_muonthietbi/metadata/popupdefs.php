<?php
$popupMeta = array (
    'moduleMain' => 'sgt_muonthietbi',
    'varName' => 'sgt_muonthietbi',
    'orderBy' => 'sgt_muonthietbi.name',
    'whereClauses' => array (
  'name' => 'sgt_muonthietbi.name',
  'ngaymuon' => 'sgt_muonthietbi.ngaymuon',
  'nguoimuon' => 'sgt_muonthietbi.nguoimuon',
  'tinhtrang' => 'sgt_muonthietbi.tinhtrang',
  'duan' => 'sgt_muonthietbi.duan',
),
    'searchInputs' => array (
  1 => 'name',
  4 => 'ngaymuon',
  5 => 'nguoimuon',
  6 => 'tinhtrang',
  7 => 'duan',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10%',
  ),
  'ngaymuon' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYMUON',
    'width' => '10%',
    'name' => 'ngaymuon',
  ),
  'nguoimuon' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NGUOIMUON',
    'id' => 'SGT_NHANVIEN_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'nguoimuon',
  ),
  'tinhtrang' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TINHTRANG',
    'width' => '10%',
    'name' => 'tinhtrang',
  ),
  'duan' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_DUAN',
    'id' => 'SGT_DUAN_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'duan',
  ),
),
);
