<?php
// created: 2024-07-12 13:50:52
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
    'type' => 'float',
    'vname' => 'LBL_SOLUONG',
    'width' => '10%',
    'default' => true,
  ),
  'loai' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_LOAI',
    'width' => '10%',
    'default' => true,
  ),
  'nguoisudung' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_NGUOISUDUNG',
    'id' => 'SGT_NHANVIEN_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'sgt_nhanvien',
    'target_record_key' => 'sgt_nhanvien_id_c',
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'sgt_vattunhap',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'sgt_vattunhap',
    'width' => '5%',
    'default' => true,
  ),
);