<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2024-07-03 10:09:18
$dictionary["sgt_thietbitra"]["fields"]["sgt_thietbitra_sgt_trathietbi"] = array (
  'name' => 'sgt_thietbitra_sgt_trathietbi',
  'type' => 'link',
  'relationship' => 'sgt_thietbitra_sgt_trathietbi',
  'source' => 'non-db',
  'module' => 'sgt_trathietbi',
  'bean_name' => 'sgt_trathietbi',
  'vname' => 'LBL_SGT_THIETBITRA_SGT_TRATHIETBI_FROM_SGT_TRATHIETBI_TITLE',
  'id_name' => 'sgt_thietbitra_sgt_trathietbisgt_trathietbi_ida',
);
$dictionary["sgt_thietbitra"]["fields"]["sgt_thietbitra_sgt_trathietbi_name"] = array (
  'name' => 'sgt_thietbitra_sgt_trathietbi_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_THIETBITRA_SGT_TRATHIETBI_FROM_SGT_TRATHIETBI_TITLE',
  'save' => true,
  'id_name' => 'sgt_thietbitra_sgt_trathietbisgt_trathietbi_ida',
  'link' => 'sgt_thietbitra_sgt_trathietbi',
  'table' => 'sgt_trathietbi',
  'module' => 'sgt_trathietbi',
  'rname' => 'name',
);
$dictionary["sgt_thietbitra"]["fields"]["sgt_thietbitra_sgt_trathietbisgt_trathietbi_ida"] = array (
  'name' => 'sgt_thietbitra_sgt_trathietbisgt_trathietbi_ida',
  'type' => 'link',
  'relationship' => 'sgt_thietbitra_sgt_trathietbi',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_THIETBITRA_SGT_TRATHIETBI_FROM_SGT_THIETBITRA_TITLE',
);

?>