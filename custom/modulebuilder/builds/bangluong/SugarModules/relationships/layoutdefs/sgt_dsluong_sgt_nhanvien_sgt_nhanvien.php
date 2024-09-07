<?php
 // created: 2024-05-02 14:19:37
$layout_defs["sgt_nhanvien"]["subpanel_setup"]['sgt_dsluong_sgt_nhanvien'] = array (
  'order' => 100,
  'module' => 'sgt_dsluong',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_DSLUONG_SGT_NHANVIEN_FROM_SGT_DSLUONG_TITLE',
  'get_subpanel_data' => 'sgt_dsluong_sgt_nhanvien',
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
