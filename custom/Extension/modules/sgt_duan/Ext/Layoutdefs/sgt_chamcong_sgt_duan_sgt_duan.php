<?php
 // created: 2024-05-02 14:18:48
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
