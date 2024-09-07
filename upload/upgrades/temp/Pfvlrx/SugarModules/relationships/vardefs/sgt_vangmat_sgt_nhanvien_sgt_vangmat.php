<?php
// created: 2024-09-03 20:07:32
$dictionary["sgt_vangmat"]["fields"]["sgt_vangmat_sgt_nhanvien"] = array (
  'name' => 'sgt_vangmat_sgt_nhanvien',
  'type' => 'link',
  'relationship' => 'sgt_vangmat_sgt_nhanvien',
  'source' => 'non-db',
  'module' => 'sgt_nhanvien',
  'bean_name' => 'sgt_nhanvien',
  'vname' => 'LBL_SGT_VANGMAT_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
  'id_name' => 'sgt_vangmat_sgt_nhanviensgt_nhanvien_ida',
);
$dictionary["sgt_vangmat"]["fields"]["sgt_vangmat_sgt_nhanvien_name"] = array (
  'name' => 'sgt_vangmat_sgt_nhanvien_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_VANGMAT_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
  'save' => true,
  'id_name' => 'sgt_vangmat_sgt_nhanviensgt_nhanvien_ida',
  'link' => 'sgt_vangmat_sgt_nhanvien',
  'table' => 'sgt_nhanvien',
  'module' => 'sgt_nhanvien',
  'rname' => 'name',
);
$dictionary["sgt_vangmat"]["fields"]["sgt_vangmat_sgt_nhanviensgt_nhanvien_ida"] = array (
  'name' => 'sgt_vangmat_sgt_nhanviensgt_nhanvien_ida',
  'type' => 'link',
  'relationship' => 'sgt_vangmat_sgt_nhanvien',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_VANGMAT_SGT_NHANVIEN_FROM_SGT_VANGMAT_TITLE',
);
