<?php
 // created: 2024-05-10 15:09:34
$layout_defs["sgt_duan"]["subpanel_setup"]['sgt_tamung_sgt_duan'] = array (
  'order' => 103,
  'module' => 'sgt_tamung',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_TAMUNG_SGT_DUAN_FROM_SGT_TAMUNG_TITLE',
  'get_subpanel_data' => 'sgt_tamung_sgt_duan',
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
