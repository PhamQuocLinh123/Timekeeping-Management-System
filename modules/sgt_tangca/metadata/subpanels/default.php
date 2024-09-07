<?php
$module_name='sgt_tangca';
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
      'popup_module' => 'sgt_chamcong',
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
    'loaingay' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_LOAINGAY',
      'width' => '10%',
      'default' => true,
    ),
    'heso' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_HESO',
      'width' => '10%',
      'default' => true,
    ),
    'pheduyet' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_PHEDUYET',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sgt_chamcong',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sgt_chamcong',
      'width' => '5%',
      'default' => true,
    ),
  ),
);