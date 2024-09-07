<?php
// created: 2024-05-02 14:18:49
$dictionary["sgt_chamcong"]["fields"]["sgt_chamcong_sgt_duan"] = array (
  'name' => 'sgt_chamcong_sgt_duan',
  'type' => 'link',
  'relationship' => 'sgt_chamcong_sgt_duan',
  'source' => 'non-db',
  'module' => 'sgt_duan',
  'bean_name' => 'sgt_duan',
  'vname' => 'LBL_SGT_CHAMCONG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
  'id_name' => 'sgt_chamcong_sgt_duansgt_duan_ida',
);
$dictionary["sgt_chamcong"]["fields"]["sgt_chamcong_sgt_duan_name"] = array (
  'name' => 'sgt_chamcong_sgt_duan_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_CHAMCONG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
  'save' => true,
  'id_name' => 'sgt_chamcong_sgt_duansgt_duan_ida',
  'link' => 'sgt_chamcong_sgt_duan',
  'table' => 'sgt_duan',
  'module' => 'sgt_duan',
  'rname' => 'name',
);
$dictionary["sgt_chamcong"]["fields"]["sgt_chamcong_sgt_duansgt_duan_ida"] = array (
  'name' => 'sgt_chamcong_sgt_duansgt_duan_ida',
  'type' => 'link',
  'relationship' => 'sgt_chamcong_sgt_duan',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_CHAMCONG_SGT_DUAN_FROM_SGT_CHAMCONG_TITLE',
);
