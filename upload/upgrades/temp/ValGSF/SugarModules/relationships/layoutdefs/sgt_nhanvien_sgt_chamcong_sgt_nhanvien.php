<?php
 // created: 2024-04-27 10:06:48
$layout_defs["sgt_nhanvien"]["subpanel_setup"]['sgt_nhanvien_sgt_chamcong'] = array (
  'order' => 100,
  'module' => 'sgt_chamcong',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_NHANVIEN_SGT_CHAMCONG_FROM_SGT_CHAMCONG_TITLE',
  'get_subpanel_data' => 'sgt_nhanvien_sgt_chamcong',
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
