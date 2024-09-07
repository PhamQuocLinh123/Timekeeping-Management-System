<?php
// created: 2024-05-10 15:08:56
$dictionary["sgt_thietbimuon"]["fields"]["sgt_thietbimuon_sgt_muonthietbi"] = array (
  'name' => 'sgt_thietbimuon_sgt_muonthietbi',
  'type' => 'link',
  'relationship' => 'sgt_thietbimuon_sgt_muonthietbi',
  'source' => 'non-db',
  'module' => 'sgt_muonthietbi',
  'bean_name' => false,
  'vname' => 'LBL_SGT_THIETBIMUON_SGT_MUONTHIETBI_FROM_SGT_MUONTHIETBI_TITLE',
  'id_name' => 'sgt_thietbimuon_sgt_muonthietbisgt_muonthietbi_ida',
);
$dictionary["sgt_thietbimuon"]["fields"]["sgt_thietbimuon_sgt_muonthietbi_name"] = array (
  'name' => 'sgt_thietbimuon_sgt_muonthietbi_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_THIETBIMUON_SGT_MUONTHIETBI_FROM_SGT_MUONTHIETBI_TITLE',
  'save' => true,
  'id_name' => 'sgt_thietbimuon_sgt_muonthietbisgt_muonthietbi_ida',
  'link' => 'sgt_thietbimuon_sgt_muonthietbi',
  'table' => 'sgt_muonthietbi',
  'module' => 'sgt_muonthietbi',
  'rname' => 'name',
);
$dictionary["sgt_thietbimuon"]["fields"]["sgt_thietbimuon_sgt_muonthietbisgt_muonthietbi_ida"] = array (
  'name' => 'sgt_thietbimuon_sgt_muonthietbisgt_muonthietbi_ida',
  'type' => 'link',
  'relationship' => 'sgt_thietbimuon_sgt_muonthietbi',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_THIETBIMUON_SGT_MUONTHIETBI_FROM_SGT_THIETBIMUON_TITLE',
);
