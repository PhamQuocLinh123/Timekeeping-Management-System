<?php
$module_name='sgt_tbm';
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
      'popup_module' => 'sgt_tbm',
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
    'calamviec' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_CALAMVIEC',
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
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sgt_tbm',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sgt_tbm',
      'width' => '5%',
      'default' => true,
    ),
  ),
);