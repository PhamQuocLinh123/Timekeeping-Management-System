<?php
 // created: 2024-05-02 14:19:23
$layout_defs["sgt_duan"]["subpanel_setup"]['sgt_nhanvien_sgt_duan'] = array (
  'order' => 90,
  'module' => 'sgt_nhanvien',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_NHANVIEN_SGT_DUAN_FROM_SGT_NHANVIEN_TITLE',
  'get_subpanel_data' => 'sgt_nhanvien_sgt_duan',
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
