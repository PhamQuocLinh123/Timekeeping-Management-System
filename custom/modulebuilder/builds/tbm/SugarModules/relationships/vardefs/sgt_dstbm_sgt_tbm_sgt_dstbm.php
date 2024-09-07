<?php
// created: 2024-08-05 07:19:09
$dictionary["sgt_dstbm"]["fields"]["sgt_dstbm_sgt_tbm"] = array (
  'name' => 'sgt_dstbm_sgt_tbm',
  'type' => 'link',
  'relationship' => 'sgt_dstbm_sgt_tbm',
  'source' => 'non-db',
  'module' => 'sgt_tbm',
  'bean_name' => false,
  'vname' => 'LBL_SGT_DSTBM_SGT_TBM_FROM_SGT_TBM_TITLE',
  'id_name' => 'sgt_dstbm_sgt_tbmsgt_tbm_ida',
);
$dictionary["sgt_dstbm"]["fields"]["sgt_dstbm_sgt_tbm_name"] = array (
  'name' => 'sgt_dstbm_sgt_tbm_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_DSTBM_SGT_TBM_FROM_SGT_TBM_TITLE',
  'save' => true,
  'id_name' => 'sgt_dstbm_sgt_tbmsgt_tbm_ida',
  'link' => 'sgt_dstbm_sgt_tbm',
  'table' => 'sgt_tbm',
  'module' => 'sgt_tbm',
  'rname' => 'name',
);
$dictionary["sgt_dstbm"]["fields"]["sgt_dstbm_sgt_tbmsgt_tbm_ida"] = array (
  'name' => 'sgt_dstbm_sgt_tbmsgt_tbm_ida',
  'type' => 'link',
  'relationship' => 'sgt_dstbm_sgt_tbm',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_DSTBM_SGT_TBM_FROM_SGT_DSTBM_TITLE',
);
