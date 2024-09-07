<?php
$module_name='sgt_tenkho';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'sgt_tenkho',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'name' => 
    array (
      'vname' => 'LBL_NAME',
      'widget_class' => 'SubPanelDetailViewLink',
      'width' => '45%',
      'default' => true,
    ),
    'vitri' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_VITRI',
      'width' => '10%',
      'default' => true,
    ),
    'thukho' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_THUKHO',
      'id' => 'SGT_NHANVIEN_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'sgt_nhanvien',
      'target_record_key' => 'sgt_nhanvien_id_c',
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sgt_tenkho',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sgt_tenkho',
      'width' => '5%',
      'default' => true,
    ),
  ),
);