<?php
$module_name='sgt_chitietnv';
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
      'popup_module' => 'sgt_chitietnv',
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
    'manv' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_MANV',
      'width' => '10%',
      'default' => true,
    ),
    'tg_ngaythuong' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_TG_NGAYTHUONG',
      'width' => '10%',
      'default' => true,
    ),
    'tg_chunhat' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_TG_CHUNHAT',
      'width' => '10%',
      'default' => true,
    ),
    'tg_ngayle' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_TG_NGAYLE',
      'width' => '10%',
      'default' => true,
    ),
    'tg_tangca' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_TG_TANGCA',
      'width' => '10%',
      'default' => true,
    ),
    'tg_ngaycong' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_TG_NGAYCONG',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sgt_chitietnv',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sgt_chitietnv',
      'width' => '5%',
      'default' => true,
    ),
  ),
);