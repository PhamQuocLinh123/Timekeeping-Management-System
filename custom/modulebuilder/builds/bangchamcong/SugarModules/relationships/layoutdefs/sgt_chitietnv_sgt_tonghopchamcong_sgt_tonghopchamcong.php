<?php
 // created: 2024-08-20 13:20:39
$layout_defs["sgt_tonghopchamcong"]["subpanel_setup"]['sgt_chitietnv_sgt_tonghopchamcong'] = array (
  'order' => 100,
  'module' => 'sgt_chitietnv',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_CHITIETNV_SGT_TONGHOPCHAMCONG_FROM_SGT_CHITIETNV_TITLE',
  'get_subpanel_data' => 'sgt_chitietnv_sgt_tonghopchamcong',
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
