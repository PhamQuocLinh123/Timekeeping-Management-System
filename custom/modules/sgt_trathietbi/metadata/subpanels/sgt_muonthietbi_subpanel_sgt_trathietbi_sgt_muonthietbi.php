<?php
// created: 2024-07-06 09:48:04
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'nguoitra' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_NGUOITRA',
    'id' => '',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'sgt_nhanvien',
    'target_record_key' => 'sgt_nhanvien_id_c',
  ),
  'tinhtrang' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_TINHTRANG',
    'width' => '10%',
    'default' => true,
  ),
  'duan' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_DUAN',
    'id' => 'SGT_DUAN_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'sgt_duan',
    'target_record_key' => 'sgt_duan_id_c',
  ),
  'tenkho' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_TENKHO',
    'id' => 'SGT_TENKHO_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'sgt_tenkho',
    'target_record_key' => 'sgt_tenkho_id_c',
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'vname' => 'LBL_ASSIGNED_TO_NAME',
    'id' => 'ASSIGNED_USER_ID',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'sgt_trathietbi',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'sgt_trathietbi',
    'width' => '5%',
    'default' => true,
  ),
);