<?php
// created: 2024-05-02 14:19:37
$dictionary["sgt_dsluong"]["fields"]["sgt_dsluong_sgt_bangluong"] = array (
  'name' => 'sgt_dsluong_sgt_bangluong',
  'type' => 'link',
  'relationship' => 'sgt_dsluong_sgt_bangluong',
  'source' => 'non-db',
  'module' => 'sgt_bangluong',
  'bean_name' => false,
  'vname' => 'LBL_SGT_DSLUONG_SGT_BANGLUONG_FROM_SGT_BANGLUONG_TITLE',
  'id_name' => 'sgt_dsluong_sgt_bangluongsgt_bangluong_ida',
);
$dictionary["sgt_dsluong"]["fields"]["sgt_dsluong_sgt_bangluong_name"] = array (
  'name' => 'sgt_dsluong_sgt_bangluong_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_DSLUONG_SGT_BANGLUONG_FROM_SGT_BANGLUONG_TITLE',
  'save' => true,
  'id_name' => 'sgt_dsluong_sgt_bangluongsgt_bangluong_ida',
  'link' => 'sgt_dsluong_sgt_bangluong',
  'table' => 'sgt_bangluong',
  'module' => 'sgt_bangluong',
  'rname' => 'name',
);
$dictionary["sgt_dsluong"]["fields"]["sgt_dsluong_sgt_bangluongsgt_bangluong_ida"] = array (
  'name' => 'sgt_dsluong_sgt_bangluongsgt_bangluong_ida',
  'type' => 'link',
  'relationship' => 'sgt_dsluong_sgt_bangluong',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_DSLUONG_SGT_BANGLUONG_FROM_SGT_DSLUONG_TITLE',
);
