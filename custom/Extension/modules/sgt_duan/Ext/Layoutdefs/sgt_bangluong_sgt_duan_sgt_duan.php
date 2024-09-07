<?php
 // created: 2024-05-02 14:19:37
$layout_defs["sgt_duan"]["subpanel_setup"]['sgt_bangluong_sgt_duan'] = array (
  'order' => 102,
  'module' => 'sgt_bangluong',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_BANGLUONG_SGT_DUAN_FROM_SGT_BANGLUONG_TITLE',
  'get_subpanel_data' => 'sgt_bangluong_sgt_duan',
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
