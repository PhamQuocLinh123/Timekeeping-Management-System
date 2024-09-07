<?php
 // created: 2024-05-10 15:08:24
$layout_defs["sgt_xuatkho"]["subpanel_setup"]['sgt_vattuxuat_sgt_xuatkho'] = array (
  'order' => 100,
  'module' => 'sgt_vattuxuat',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_VATTUXUAT_SGT_XUATKHO_FROM_SGT_VATTUXUAT_TITLE',
  'get_subpanel_data' => 'sgt_vattuxuat_sgt_xuatkho',
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
