<?php
 // created: 2024-05-10 15:08:41
$layout_defs["sgt_chuyenkho"]["subpanel_setup"]['sgt_vattuchuyen_sgt_chuyenkho'] = array (
  'order' => 100,
  'module' => 'sgt_vattuchuyen',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_VATTUCHUYEN_SGT_CHUYENKHO_FROM_SGT_VATTUCHUYEN_TITLE',
  'get_subpanel_data' => 'sgt_vattuchuyen_sgt_chuyenkho',
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
