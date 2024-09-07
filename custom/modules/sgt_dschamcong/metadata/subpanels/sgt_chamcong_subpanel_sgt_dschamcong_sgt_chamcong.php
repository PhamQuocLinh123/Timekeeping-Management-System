<?php
// created: 2024-05-13 18:32:06
$subpanel_layout['list_fields'] = array (
  'checkbox' =>
  array(
    'vname' =>  'LBL_Blank',
    'widget_type' => 'checkbox',
    'widget_class' => 'SubPanelCheck',
    'checkbox_value' => true,
    'width' => '5%',
    'sortable' => false,
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'ma_nv' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_MA_NV',
    'width' => '10%',
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
  'tonggiolam' => 
  array (
    'type' => 'float',
    'vname' => 'LBL_TONGGIOLAM',
    'width' => '10%',
    'default' => true,
  ),
  'dacbiet' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_DACBIET',
    'width' => '10%',
    'default' => true,
  ),
  'tenca' => 
  array (
    'type' => 'enum',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_TENCA',
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
    'module' => 'h_nhanviensanxuat',
    'width' => '4%',
    'default' => true,
  ),
);
