<?php
$module_name='sgt_thietbitra';
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
      'popup_module' => 'sgt_thietbitra',
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
    'ma_vt' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_MA_VT',
      'width' => '10%',
      'default' => true,
    ),
    'soluong' => 
    array (
      'type' => 'int',
      'default' => true,
      'vname' => 'LBL_SOLUONG',
      'width' => '10%',
    ),
    'dvt' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_DVT',
      'width' => '10%',
      'default' => true,
    ),
    'tinhtrang' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_TINHTRANG',
      'width' => '10%',
      'default' => true,
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
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sgt_thietbitra',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sgt_thietbitra',
      'width' => '5%',
      'default' => true,
    ),
  ),
);