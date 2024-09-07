<?php
 // created: 2024-09-03 21:32:58
$layout_defs["sgt_nhanvien"]["subpanel_setup"]['sgt_vangmat_sgt_nhanvien'] = array (
  'order' => 100,
  'module' => 'sgt_vangmat',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_VANGMAT_SGT_NHANVIEN_FROM_SGT_VANGMAT_TITLE',
  'get_subpanel_data' => 'sgt_vangmat_sgt_nhanvien',
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
