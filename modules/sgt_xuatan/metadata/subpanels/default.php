<?php
$module_name='sgt_xuatan';
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
      'popup_module' => 'sgt_xuatan',
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
    'soluong_nv' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_SOLUONG_NV',
      'width' => '10%',
      'default' => true,
    ),
    'sl_xuatan' => 
    array (
      'type' => 'int',
      'vname' => 'LBL_SL_XUATAN',
      'width' => '10%',
      'default' => true,
    ),
    'tinhtrang' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'vname' => 'LBL_TINHTRANG',
      'width' => '10%',
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
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sgt_xuatan',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sgt_xuatan',
      'width' => '5%',
      'default' => true,
    ),
  ),
);