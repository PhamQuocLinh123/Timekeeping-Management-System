<?php
 // created: 2024-08-05 07:19:09
$layout_defs["sgt_tbm"]["subpanel_setup"]['sgt_dstbm_sgt_tbm'] = array (
  'order' => 100,
  'module' => 'sgt_dstbm',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_SGT_DSTBM_SGT_TBM_FROM_SGT_DSTBM_TITLE',
  'get_subpanel_data' => 'sgt_dstbm_sgt_tbm',
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
