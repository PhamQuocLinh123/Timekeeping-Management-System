<?php
$dashletData['sgt_muonthietbiDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'ngaymuon' => 
  array (
    'default' => '',
  ),
  'xacnhan' => 
  array (
    'default' => '',
  ),
  'tinhtrang' => 
  array (
    'default' => '',
  ),
  'nguoimuon' => 
  array (
    'default' => '',
  ),
);
$dashletData['sgt_muonthietbiDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'nguoimuon' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_NGUOIMUON',
    'id' => 'SGT_NHANVIEN_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
  ),
  'date_modified' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_MODIFIED',
    'name' => 'date_modified',
    'default' => false,
  ),
  'created_by' => 
  array (
    'width' => '8%',
    'label' => 'LBL_CREATED',
    'name' => 'created_by',
    'default' => false,
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
