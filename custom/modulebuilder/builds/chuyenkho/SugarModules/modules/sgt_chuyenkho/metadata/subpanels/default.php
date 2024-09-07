<?php
$module_name='sgt_chuyenkho';
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
      'popup_module' => 'sgt_chuyenkho',
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
    'ngaychuyen' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_NGAYCHUYEN',
      'width' => '10%',
      'default' => true,
    ),
    'tukho' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_TUKHO',
      'id' => 'SGT_TENKHO_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'sgt_tenkho',
      'target_record_key' => 'sgt_tenkho_id_c',
    ),
    'denkho' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_DENKHO',
      'id' => 'SGT_TENKHO_ID1_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'sgt_tenkho',
      'target_record_key' => 'sgt_tenkho_id1_c',
    ),
    'tinhtrang' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_TINHTRANG',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sgt_chuyenkho',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sgt_chuyenkho',
      'width' => '5%',
      'default' => true,
    ),
  ),
);