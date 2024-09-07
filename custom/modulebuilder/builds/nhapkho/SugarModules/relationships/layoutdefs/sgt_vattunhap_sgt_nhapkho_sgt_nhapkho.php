<?php
 // created: 2024-05-10 15:08:07
$layout_defs["sgt_nhapkho"]["subpanel_setup"]['sgt_vattunhap_sgt_nhapkho'] = array (
  'order' => 100,
  'module' => 'sgt_vattunhap',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_VATTUNHAP_SGT_NHAPKHO_FROM_SGT_VATTUNHAP_TITLE',
  'get_subpanel_data' => 'sgt_vattunhap_sgt_nhapkho',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
