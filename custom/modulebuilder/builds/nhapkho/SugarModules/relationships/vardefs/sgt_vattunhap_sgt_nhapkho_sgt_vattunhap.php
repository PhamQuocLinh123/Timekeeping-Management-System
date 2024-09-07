<?php
// created: 2024-05-10 15:08:07
$dictionary["sgt_vattunhap"]["fields"]["sgt_vattunhap_sgt_nhapkho"] = array (
  'name' => 'sgt_vattunhap_sgt_nhapkho',
  'type' => 'link',
  'relationship' => 'sgt_vattunhap_sgt_nhapkho',
  'source' => 'non-db',
  'module' => 'sgt_nhapkho',
  'bean_name' => false,
  'vname' => 'LBL_SGT_VATTUNHAP_SGT_NHAPKHO_FROM_SGT_NHAPKHO_TITLE',
  'id_name' => 'sgt_vattunhap_sgt_nhapkhosgt_nhapkho_ida',
);
$dictionary["sgt_vattunhap"]["fields"]["sgt_vattunhap_sgt_nhapkho_name"] = array (
  'name' => 'sgt_vattunhap_sgt_nhapkho_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_VATTUNHAP_SGT_NHAPKHO_FROM_SGT_NHAPKHO_TITLE',
  'save' => true,
  'id_name' => 'sgt_vattunhap_sgt_nhapkhosgt_nhapkho_ida',
  'link' => 'sgt_vattunhap_sgt_nhapkho',
  'table' => 'sgt_nhapkho',
  'module' => 'sgt_nhapkho',
  'rname' => 'name',
);
$dictionary["sgt_vattunhap"]["fields"]["sgt_vattunhap_sgt_nhapkhosgt_nhapkho_ida"] = array (
  'name' => 'sgt_vattunhap_sgt_nhapkhosgt_nhapkho_ida',
  'type' => 'link',
  'relationship' => 'sgt_vattunhap_sgt_nhapkho',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_VATTUNHAP_SGT_NHAPKHO_FROM_SGT_VATTUNHAP_TITLE',
);
