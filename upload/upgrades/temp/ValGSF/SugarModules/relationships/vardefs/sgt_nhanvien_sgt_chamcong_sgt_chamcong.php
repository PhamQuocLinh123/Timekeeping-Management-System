<?php
// created: 2024-04-27 10:06:48
$dictionary["sgt_chamcong"]["fields"]["sgt_nhanvien_sgt_chamcong"] = array (
  'name' => 'sgt_nhanvien_sgt_chamcong',
  'type' => 'link',
  'relationship' => 'sgt_nhanvien_sgt_chamcong',
  'source' => 'non-db',
  'module' => 'sgt_nhanvien',
  'bean_name' => false,
  'vname' => 'LBL_SGT_NHANVIEN_SGT_CHAMCONG_FROM_SGT_NHANVIEN_TITLE',
  'id_name' => 'sgt_nhanvien_sgt_chamcongsgt_nhanvien_ida',
);
$dictionary["sgt_chamcong"]["fields"]["sgt_nhanvien_sgt_chamcong_name"] = array (
  'name' => 'sgt_nhanvien_sgt_chamcong_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_NHANVIEN_SGT_CHAMCONG_FROM_SGT_NHANVIEN_TITLE',
  'save' => true,
  'id_name' => 'sgt_nhanvien_sgt_chamcongsgt_nhanvien_ida',
  'link' => 'sgt_nhanvien_sgt_chamcong',
  'table' => 'sgt_nhanvien',
  'module' => 'sgt_nhanvien',
  'rname' => 'name',
);
$dictionary["sgt_chamcong"]["fields"]["sgt_nhanvien_sgt_chamcongsgt_nhanvien_ida"] = array (
  'name' => 'sgt_nhanvien_sgt_chamcongsgt_nhanvien_ida',
  'type' => 'link',
  'relationship' => 'sgt_nhanvien_sgt_chamcong',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_NHANVIEN_SGT_CHAMCONG_FROM_SGT_CHAMCONG_TITLE',
);
