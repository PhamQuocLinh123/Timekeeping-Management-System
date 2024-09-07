<?php
// created: 2024-07-09 18:22:00
$subpanel_layout['list_fields'] = array (
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
  'updatehu_button' => 
  array (
    'vname' => 'LBL_UPDATEHU_BUTTON',
    'widget_class' => 'SubPanelUpdateHuButton',
    'module' => 'sgt_thietbitra',
    'width' => '4%',
    'default' => true,
  ),
  'updatemat_button' => 
  array (
    'vname' => 'LBL_UPDATEMAT_BUTTON',
    'widget_class' => 'SubPanelUpdateMatButton',
    'module' => 'sgt_thietbitra',
    'width' => '5%',
    'default' => true,
  ),
  'updatetot_button' => 
  array (
    'vname' => 'LBL_UPDATETOT_BUTTON',
    'widget_class' => 'SubPanelUpdateTotButton',
    'module' => 'sgt_thietbitra',
    'width' => '5%',
    'default' => true,
  ),
);