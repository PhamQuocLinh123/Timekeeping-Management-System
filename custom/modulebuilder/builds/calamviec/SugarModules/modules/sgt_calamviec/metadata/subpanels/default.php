<?php
$module_name='sgt_calamviec';
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
      'popup_module' => 'sgt_calamviec',
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
    'giovao' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_GIOVAO',
      'width' => '10%',
      'default' => true,
    ),
    'giora' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_GIORA',
      'width' => '10%',
      'default' => true,
    ),
    'date_modified' => 
    array (
      'type' => 'datetime',
      'width' => '45%',
      'vname' => 'LBL_DATE_MODIFIED',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sgt_calamviec',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sgt_calamviec',
      'width' => '5%',
      'default' => true,
    ),
  ),
);