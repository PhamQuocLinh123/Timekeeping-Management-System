<?php
$module_name='sgt_nhanvien';
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
      'popup_module' => 'sgt_nhanvien',
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
    'cccd' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CCCD',
      'width' => '10%',
      'default' => true,
    ),
    'sodienthoai' => 
    array (
      'type' => 'phone',
      'vname' => 'LBL_SODIENTHOAI',
      'width' => '10%',
      'default' => true,
    ),
    'chucvu' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_CHUCVU',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sgt_nhanvien',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sgt_nhanvien',
      'width' => '5%',
      'default' => true,
    ),
  ),
);