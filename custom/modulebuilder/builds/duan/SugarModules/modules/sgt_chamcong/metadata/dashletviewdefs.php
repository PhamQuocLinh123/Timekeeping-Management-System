<?php
$dashletData['sgt_chamcongDashlet']['searchFields'] = array (
  'name' => 
  array (
    'default' => '',
  ),
  'loaingay' => 
  array (
    'default' => '',
  ),
  'sgt_chamcong_sgt_duan_name' => 
  array (
    'default' => '',
  ),
);
$dashletData['sgt_chamcongDashlet']['columns'] = array (
  'name' => 
  array (
    'width' => '40%',
    'label' => 'LBL_LIST_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'sgt_chamcong_sgt_duan_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_SGT_CHAMCONG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
    'id' => 'SGT_CHAMCONG_SGT_DUANSGT_DUAN_IDA',
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
