<?php
$module_name='sgt_dstangca';
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
      'popup_module' => 'h_nhanviensanxuat',
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
    'ma_nv' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_MA_NV',
      'width' => '10%',
      'default' => true,
    ),
    'batdau' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_BATDAU',
      'width' => '10%',
      'default' => true,
    ),
    'ketthuc' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_KETTHUC',
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
  ),
);