<?php
$dashletData['sgt_tenkhoDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'vitri' => 
  array (
    'default' => '',
  ),
  'thukho' => 
  array (
    'default' => '',
  ),
);
$dashletData['sgt_tenkhoDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'vitri' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_VITRI',
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
