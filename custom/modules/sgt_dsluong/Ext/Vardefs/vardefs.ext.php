<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2024-05-02 14:19:37
$dictionary["sgt_dsluong"]["fields"]["sgt_dsluong_sgt_bangluong"] = array (
  'name' => 'sgt_dsluong_sgt_bangluong',
  'type' => 'link',
  'relationship' => 'sgt_dsluong_sgt_bangluong',
  'source' => 'non-db',
  'module' => 'sgt_bangluong',
  'bean_name' => false,
  'vname' => 'LBL_SGT_DSLUONG_SGT_BANGLUONG_FROM_SGT_BANGLUONG_TITLE',
  'id_name' => 'sgt_dsluong_sgt_bangluongsgt_bangluong_ida',
);
$dictionary["sgt_dsluong"]["fields"]["sgt_dsluong_sgt_bangluong_name"] = array (
  'name' => 'sgt_dsluong_sgt_bangluong_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_DSLUONG_SGT_BANGLUONG_FROM_SGT_BANGLUONG_TITLE',
  'save' => true,
  'id_name' => 'sgt_dsluong_sgt_bangluongsgt_bangluong_ida',
  'link' => 'sgt_dsluong_sgt_bangluong',
  'table' => 'sgt_bangluong',
  'module' => 'sgt_bangluong',
  'rname' => 'name',
);
$dictionary["sgt_dsluong"]["fields"]["sgt_dsluong_sgt_bangluongsgt_bangluong_ida"] = array (
  'name' => 'sgt_dsluong_sgt_bangluongsgt_bangluong_ida',
  'type' => 'link',
  'relationship' => 'sgt_dsluong_sgt_bangluong',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_DSLUONG_SGT_BANGLUONG_FROM_SGT_DSLUONG_TITLE',
);


// created: 2024-05-02 14:19:37
$dictionary["sgt_dsluong"]["fields"]["sgt_dsluong_sgt_nhanvien"] = array (
  'name' => 'sgt_dsluong_sgt_nhanvien',
  'type' => 'link',
  'relationship' => 'sgt_dsluong_sgt_nhanvien',
  'source' => 'non-db',
  'module' => 'sgt_nhanvien',
  'bean_name' => 'sgt_nhanvien',
  'vname' => 'LBL_SGT_DSLUONG_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
  'id_name' => 'sgt_dsluong_sgt_nhanviensgt_nhanvien_ida',
);
$dictionary["sgt_dsluong"]["fields"]["sgt_dsluong_sgt_nhanvien_name"] = array (
  'name' => 'sgt_dsluong_sgt_nhanvien_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_DSLUONG_SGT_NHANVIEN_FROM_SGT_NHANVIEN_TITLE',
  'save' => true,
  'id_name' => 'sgt_dsluong_sgt_nhanviensgt_nhanvien_ida',
  'link' => 'sgt_dsluong_sgt_nhanvien',
  'table' => 'sgt_nhanvien',
  'module' => 'sgt_nhanvien',
  'rname' => 'name',
);
$dictionary["sgt_dsluong"]["fields"]["sgt_dsluong_sgt_nhanviensgt_nhanvien_ida"] = array (
  'name' => 'sgt_dsluong_sgt_nhanviensgt_nhanvien_ida',
  'type' => 'link',
  'relationship' => 'sgt_dsluong_sgt_nhanvien',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_DSLUONG_SGT_NHANVIEN_FROM_SGT_DSLUONG_TITLE',
);

?>