<?php
 // created: 2024-06-08 10:45:32
$layout_defs["sgt_duan"]["subpanel_setup"]['sgt_calamviec_sgt_duan'] = array (
  'order' => 100,
  'module' => 'sgt_calamviec',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_CALAMVIEC_SGT_DUAN_FROM_SGT_CALAMVIEC_TITLE',
  'get_subpanel_data' => 'sgt_calamviec_sgt_duan',
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
