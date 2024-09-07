<?php
// created: 2024-05-02 14:19:23
$dictionary["sgt_atld"]["fields"]["sgt_atld_sgt_nhanvien"] = array (
  'name' => 'sgt_atld_sgt_nhanvien',
  'type' => 'link',
  'relationship' => 'sgt_atld_sgt_nhanvien',
  'source' => 'non-db',
  'module' => 'sgt_nhanvien',
  'bean_name' => 'sgt_nhanvien',
  'vname' => 'LBL_SGT_ATLD_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
  'id_name' => 'sgt_atld_sgt_nhanviensgt_nhanvien_ida',
);
$dictionary["sgt_atld"]["fields"]["sgt_atld_sgt_nhanvien_name"] = array (
  'name' => 'sgt_atld_sgt_nhanvien_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_ATLD_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
  'save' => true,
  'id_name' => 'sgt_atld_sgt_nhanviensgt_nhanvien_ida',
  'link' => 'sgt_atld_sgt_nhanvien',
  'table' => 'sgt_nhanvien',
  'module' => 'sgt_nhanvien',
  'rname' => 'name',
);
$dictionary["sgt_atld"]["fields"]["sgt_atld_sgt_nhanviensgt_nhanvien_ida"] = array (
  'name' => 'sgt_atld_sgt_nhanviensgt_nhanvien_ida',
  'type' => 'link',
  'relationship' => 'sgt_atld_sgt_nhanvien',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_ATLD_SGT_NHANVIEN_FROM_SGT_ATLD_TITLE',
);
