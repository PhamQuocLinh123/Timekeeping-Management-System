<?php
$module_name='sgt_muahang';
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
      'popup_module' => 'sgt_muahang',
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
    'nguoidexuat' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_NGUOIDEXUAT',
      'id' => 'SGT_NHANVIEN_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'sgt_nhanvien',
      'target_record_key' => 'sgt_nhanvien_id_c',
    ),
    'pheduyet' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_PHEDUYET',
      'width' => '10%',
      'default' => true,
    ),
    'tinhtrang' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_TINHTRANG',
      'width' => '10%',
      'default' => true,
    ),
    'ngaydathang' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_NGAYDATHANG',
      'width' => '10%',
      'default' => true,
    ),
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sgt_muahang',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sgt_muahang',
      'width' => '5%',
      'default' => true,
    ),
  ),
);