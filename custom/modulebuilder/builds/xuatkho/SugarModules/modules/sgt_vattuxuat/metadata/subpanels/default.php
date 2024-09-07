<?php
$module_name='sgt_vattuxuat';
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
      'popup_module' => 'sgt_vattunhap',
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
      'type' => 'float',
      'vname' => 'LBL_SOLUONG',
      'width' => '10%',
      'default' => true,
    ),
    'dvt' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_DVT',
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
    'sl_conlai' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_SL_CONLAI',
      'width' => '10%',
      'default' => true,
    ),
    'xac_vt' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_XAC_VT',
      'width' => '10%',
      'default' => true,
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
  ),
);