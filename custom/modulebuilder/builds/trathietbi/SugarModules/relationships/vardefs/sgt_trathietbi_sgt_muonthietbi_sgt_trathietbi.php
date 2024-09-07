<?php
// created: 2024-07-03 10:09:18
$dictionary["sgt_trathietbi"]["fields"]["sgt_trathietbi_sgt_muonthietbi"] = array (
  'name' => 'sgt_trathietbi_sgt_muonthietbi',
  'type' => 'link',
  'relationship' => 'sgt_trathietbi_sgt_muonthietbi',
  'source' => 'non-db',
  'module' => 'sgt_muonthietbi',
  'bean_name' => 'sgt_muonthietbi',
  'vname' => 'LBL_SGT_TRATHIETBI_SGT_MUONTHIETBI_FROM_SGT_MUONTHIETBI_TITLE',
  'id_name' => 'sgt_trathietbi_sgt_muonthietbisgt_muonthietbi_ida',
);
$dictionary["sgt_trathietbi"]["fields"]["sgt_trathietbi_sgt_muonthietbi_name"] = array (
  'name' => 'sgt_trathietbi_sgt_muonthietbi_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_TRATHIETBI_SGT_MUONTHIETBI_FROM_SGT_MUONTHIETBI_TITLE',
  'save' => true,
  'id_name' => 'sgt_trathietbi_sgt_muonthietbisgt_muonthietbi_ida',
  'link' => 'sgt_trathietbi_sgt_muonthietbi',
  'table' => 'sgt_muonthietbi',
  'module' => 'sgt_muonthietbi',
  'rname' => 'name',
);
$dictionary["sgt_trathietbi"]["fields"]["sgt_trathietbi_sgt_muonthietbisgt_muonthietbi_ida"] = array (
  'name' => 'sgt_trathietbi_sgt_muonthietbisgt_muonthietbi_ida',
  'type' => 'link',
  'relationship' => 'sgt_trathietbi_sgt_muonthietbi',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_TRATHIETBI_SGT_MUONTHIETBI_FROM_SGT_TRATHIETBI_TITLE',
);
