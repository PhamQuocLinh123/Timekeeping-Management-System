<?php
$module_name='sgt_muonthietbi';
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
      'popup_module' => 'sgt_muonthietbi',
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
    'ngaymuon' => 
    array (
      'type' => 'date',
      'vname' => 'LBL_NGAYMUON',
      'width' => '10%',
      'default' => true,
    ),
    'nguoimuon' => 
    array (
      'type' => 'relate',
      'studio' => 'visible',
      'vname' => 'LBL_NGUOIMUON',
      'id' => 'SGT_NHANVIEN_ID_C',
      'link' => true,
      'width' => '10%',
      'default' => true,
      'widget_class' => 'SubPanelDetailViewLink',
      'target_module' => 'sgt_nhanvien',
      'target_record_key' => 'sgt_nhanvien_id_c',
    ),
    'tinhtrang' => 
    array (
      'type' => 'enum',
      'studio' => 'visible',
      'vname' => 'LBL_TINHTRANG',
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
    'edit_button' => 
    array (
      'vname' => 'LBL_EDIT_BUTTON',
      'widget_class' => 'SubPanelEditButton',
      'module' => 'sgt_muonthietbi',
      'width' => '4%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'sgt_muonthietbi',
      'width' => '5%',
      'default' => true,
    ),
  ),
);