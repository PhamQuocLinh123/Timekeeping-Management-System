<?php
 // created: 2024-05-02 14:19:51
$layout_defs["sgt_nhanvien"]["subpanel_setup"]['sgt_tamung_sgt_nhanvien'] = array (
  'order' => 100,
  'module' => 'sgt_tamung',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_TAMUNG_SGT_NHANVIEN_FROM_SGT_TAMUNG_TITLE',
  'get_subpanel_data' => 'sgt_tamung_sgt_nhanvien',
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
