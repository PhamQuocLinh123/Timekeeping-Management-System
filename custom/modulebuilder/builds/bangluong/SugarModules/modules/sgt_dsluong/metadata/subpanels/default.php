<?php
$module_name='sgt_dsluong';
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
      'popup_module' => 'sgt_dsluong',
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
      'type' => 'int',
      'vname' => 'LBL_MA_NV',
      'width' => '10%',
      'default' => true,
    ),
    'luongcoban' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_LUONGCOBAN',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'ngaycongquydoi' => 
    array (
      'type' => 'float',
      'vname' => 'LBL_NGAYCONGQUYDOI',
      'width' => '10%',
      'default' => true,
    ),
    'tongtienluong' => 
    array (
      'type' => 'currency',
      'vname' => 'LBL_TONGTIENLUONG',
      'currency_format' => true,
      'width' => '10%',
      'default' => true,
    ),
    'sotaikhoan' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_SOTAIKHOAN',
      'id' => 'H_NHANVIEN_ID2_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'h_nhanvien',
      'target_record_key' => 'h_nhanvien_id2_c',
    ),
    'nganhang' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_NGANHANG',
      'id' => 'H_NHANVIEN_ID1_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'h_nhanvien',
      'target_record_key' => 'h_nhanvien_id1_c',
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sgt_dsluong',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sgt_dsluong',
      'width' => '5%',
      'default' => true,
    ),
  ),
);