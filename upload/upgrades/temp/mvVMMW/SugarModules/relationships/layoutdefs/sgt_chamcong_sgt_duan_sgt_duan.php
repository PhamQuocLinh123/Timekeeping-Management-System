<?php
 // created: 2024-04-27 09:46:01
$layout_defs["sgt_duan"]["subpanel_setup"]['sgt_chamcong_sgt_duan'] = array (
  'order' => 100,
  'module' => 'sgt_chamcong',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_CHAMCONG_SGT_DUAN_FROM_SGT_CHAMCONG_TITLE',
  'get_subpanel_data' => 'sgt_chamcong_sgt_duan',
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
