<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2024-05-10 15:09:34
$dictionary["sgt_tamung"]["fields"]["sgt_tamung_sgt_duan"] = array (
  'name' => 'sgt_tamung_sgt_duan',
  'type' => 'link',
  'relationship' => 'sgt_tamung_sgt_duan',
  'source' => 'non-db',
  'module' => 'sgt_duan',
  'bean_name' => 'sgt_duan',
  'vname' => 'LBL_SGT_TAMUNG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
  'id_name' => 'sgt_tamung_sgt_duansgt_duan_ida',
);
$dictionary["sgt_tamung"]["fields"]["sgt_tamung_sgt_duan_name"] = array (
  'name' => 'sgt_tamung_sgt_duan_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_TAMUNG_SGT_DUAN_FROM_SGT_DUAN_TITLE',
  'save' => true,
  'id_name' => 'sgt_tamung_sgt_duansgt_duan_ida',
  'link' => 'sgt_tamung_sgt_duan',
  'table' => 'sgt_duan',
  'module' => 'sgt_duan',
  'rname' => 'name',
);
$dictionary["sgt_tamung"]["fields"]["sgt_tamung_sgt_duansgt_duan_ida"] = array (
  'name' => 'sgt_tamung_sgt_duansgt_duan_ida',
  'type' => 'link',
  'relationship' => 'sgt_tamung_sgt_duan',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_TAMUNG_SGT_DUAN_FROM_SGT_TAMUNG_TITLE',
);


// created: 2024-05-10 15:09:34
$dictionary["sgt_tamung"]["fields"]["sgt_tamung_sgt_nhanvien"] = array (
  'name' => 'sgt_tamung_sgt_nhanvien',
  'type' => 'link',
  'relationship' => 'sgt_tamung_sgt_nhanvien',
  'source' => 'non-db',
  'module' => 'sgt_nhanvien',
  'bean_name' => 'sgt_nhanvien',
  'vname' => 'LBL_SGT_TAMUNG_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
  'id_name' => 'sgt_tamung_sgt_nhanviensgt_nhanvien_ida',
);
$dictionary["sgt_tamung"]["fields"]["sgt_tamung_sgt_nhanvien_name"] = array (
  'name' => 'sgt_tamung_sgt_nhanvien_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_TAMUNG_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
  'save' => true,
  'id_name' => 'sgt_tamung_sgt_nhanviensgt_nhanvien_ida',
  'link' => 'sgt_tamung_sgt_nhanvien',
  'table' => 'sgt_nhanvien',
  'module' => 'sgt_nhanvien',
  'rname' => 'name',
);
$dictionary["sgt_tamung"]["fields"]["sgt_tamung_sgt_nhanviensgt_nhanvien_ida"] = array (
  'name' => 'sgt_tamung_sgt_nhanviensgt_nhanvien_ida',
  'type' => 'link',
  'relationship' => 'sgt_tamung_sgt_nhanvien',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_TAMUNG_SGT_NHANVIEN_FROM_SGT_TAMUNG_TITLE',
);

?>