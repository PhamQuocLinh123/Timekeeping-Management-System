<?php
$dashletData['h_tamungDashlet']['searchFields'] = array (
  'tennhanvien' => 
  array (
    'default' => '',
  ),
  'ngaytamung' => 
  array (
    'default' => '',
  ),
  'sotientamung' => 
  array (
    'default' => '',
  ),
  'nguoiduyettamung' => 
  array (
    'default' => '',
  ),
  'tinhtrangtamung' => 
  array (
    'default' => '',
  ),
);
$dashletData['h_tamungDashlet']['columns'] = array (
  'ngaytamung' => 
  array (
    'type' => 'date',
    'label' => 'LBL_NGAYTAMUNG',
    'width' => '10%',
    'default' => true,
    'name' => 'ngaytamung',
  ),
  'sotientamung' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_SOTIENTAMUNG',
    'currency_format' => true,
    'width' => '10%',
    'default' => true,
    'name' => 'sotientamung',
  ),
  'tinhtrangtamung' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_TINHTRANGTAMUNG',
    'width' => '10%',
    'default' => true,
    'name' => 'tinhtrangtamung',
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
  'date_entered' => 
  array (
    'width' => '15%',
    'label' => 'LBL_DATE_ENTERED',
    'default' => false,
    'name' => 'date_entered',
  ),
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => false,
    'name' => 'name',
  ),
  'assigned_user_name' => 
  array (
    'width' => '8%',
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'name' => 'assigned_user_name',
    'default' => false,
  ),
);
