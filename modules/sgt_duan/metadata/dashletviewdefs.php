<?php
$dashletData['h_duanDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'tenduan' => 
  array (
    'default' => '',
  ),
);
$dashletData['h_duanDashlet']['columns'] = array (
  'name' => 
  array (
    'type' => 'name',
    'link' => true,
    'label' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
    'name' => 'name',
  ),
  'ngayketthuc' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYKETTHUC',
    'width' => '10%',
    'default' => true,
    'name' => 'ngayketthuc',
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
