<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2024-07-19 15:14:02
$dictionary["sgt_dstangca"]["fields"]["sgt_dstangca_sgt_tangca"] = array (
  'name' => 'sgt_dstangca_sgt_tangca',
  'type' => 'link',
  'relationship' => 'sgt_dstangca_sgt_tangca',
  'source' => 'non-db',
  'module' => 'sgt_tangca',
  'bean_name' => false,
  'vname' => 'LBL_SGT_DSTANGCA_SGT_TANGCA_FROM_SGT_TANGCA_TITLE',
  'id_name' => 'sgt_dstangca_sgt_tangcasgt_tangca_ida',
);
$dictionary["sgt_dstangca"]["fields"]["sgt_dstangca_sgt_tangca_name"] = array (
  'name' => 'sgt_dstangca_sgt_tangca_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_DSTANGCA_SGT_TANGCA_FROM_SGT_TANGCA_TITLE',
  'save' => true,
  'id_name' => 'sgt_dstangca_sgt_tangcasgt_tangca_ida',
  'link' => 'sgt_dstangca_sgt_tangca',
  'table' => 'sgt_tangca',
  'module' => 'sgt_tangca',
  'rname' => 'name',
);
$dictionary["sgt_dstangca"]["fields"]["sgt_dstangca_sgt_tangcasgt_tangca_ida"] = array (
  'name' => 'sgt_dstangca_sgt_tangcasgt_tangca_ida',
  'type' => 'link',
  'relationship' => 'sgt_dstangca_sgt_tangca',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_DSTANGCA_SGT_TANGCA_FROM_SGT_DSTANGCA_TITLE',
);


 // created: 2024-07-22 14:02:15
$dictionary['sgt_dstangca']['fields']['ketthuc']['audited']=true;

 
?>