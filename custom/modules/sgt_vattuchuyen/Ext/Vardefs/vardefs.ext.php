<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2024-05-10 15:08:41
$dictionary["sgt_vattuchuyen"]["fields"]["sgt_vattuchuyen_sgt_chuyenkho"] = array (
  'name' => 'sgt_vattuchuyen_sgt_chuyenkho',
  'type' => 'link',
  'relationship' => 'sgt_vattuchuyen_sgt_chuyenkho',
  'source' => 'non-db',
  'module' => 'sgt_chuyenkho',
  'bean_name' => false,
  'vname' => 'LBL_SGT_VATTUCHUYEN_SGT_CHUYENKHO_FROM_SGT_CHUYENKHO_TITLE',
  'id_name' => 'sgt_vattuchuyen_sgt_chuyenkhosgt_chuyenkho_ida',
);
$dictionary["sgt_vattuchuyen"]["fields"]["sgt_vattuchuyen_sgt_chuyenkho_name"] = array (
  'name' => 'sgt_vattuchuyen_sgt_chuyenkho_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_VATTUCHUYEN_SGT_CHUYENKHO_FROM_SGT_CHUYENKHO_TITLE',
  'save' => true,
  'id_name' => 'sgt_vattuchuyen_sgt_chuyenkhosgt_chuyenkho_ida',
  'link' => 'sgt_vattuchuyen_sgt_chuyenkho',
  'table' => 'sgt_chuyenkho',
  'module' => 'sgt_chuyenkho',
  'rname' => 'name',
);
$dictionary["sgt_vattuchuyen"]["fields"]["sgt_vattuchuyen_sgt_chuyenkhosgt_chuyenkho_ida"] = array (
  'name' => 'sgt_vattuchuyen_sgt_chuyenkhosgt_chuyenkho_ida',
  'type' => 'link',
  'relationship' => 'sgt_vattuchuyen_sgt_chuyenkho',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_VATTUCHUYEN_SGT_CHUYENKHO_FROM_SGT_VATTUCHUYEN_TITLE',
);

?>