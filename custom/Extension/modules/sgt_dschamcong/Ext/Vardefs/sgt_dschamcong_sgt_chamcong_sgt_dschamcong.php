<?php
// created: 2024-05-02 14:18:48
$dictionary["sgt_dschamcong"]["fields"]["sgt_dschamcong_sgt_chamcong"] = array (
  'name' => 'sgt_dschamcong_sgt_chamcong',
  'type' => 'link',
  'relationship' => 'sgt_dschamcong_sgt_chamcong',
  'source' => 'non-db',
  'module' => 'sgt_chamcong',
  'bean_name' => 'sgt_chamcong',
  'vname' => 'LBL_SGT_DSCHAMCONG_SGT_CHAMCONG_FROM_SGT_CHAMCONG_TITLE',
  'id_name' => 'sgt_dschamcong_sgt_chamcongsgt_chamcong_ida',
);
$dictionary["sgt_dschamcong"]["fields"]["sgt_dschamcong_sgt_chamcong_name"] = array (
  'name' => 'sgt_dschamcong_sgt_chamcong_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_DSCHAMCONG_SGT_CHAMCONG_FROM_SGT_CHAMCONG_TITLE',
  'save' => true,
  'id_name' => 'sgt_dschamcong_sgt_chamcongsgt_chamcong_ida',
  'link' => 'sgt_dschamcong_sgt_chamcong',
  'table' => 'sgt_chamcong',
  'module' => 'sgt_chamcong',
  'rname' => 'name',
);
$dictionary["sgt_dschamcong"]["fields"]["sgt_dschamcong_sgt_chamcongsgt_chamcong_ida"] = array (
  'name' => 'sgt_dschamcong_sgt_chamcongsgt_chamcong_ida',
  'type' => 'link',
  'relationship' => 'sgt_dschamcong_sgt_chamcong',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_DSCHAMCONG_SGT_CHAMCONG_FROM_SGT_DSCHAMCONG_TITLE',
);
