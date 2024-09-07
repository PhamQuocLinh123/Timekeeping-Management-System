<?php
// created: 2024-05-10 15:08:25
$dictionary["sgt_vattuxuat"]["fields"]["sgt_vattuxuat_sgt_xuatkho"] = array (
  'name' => 'sgt_vattuxuat_sgt_xuatkho',
  'type' => 'link',
  'relationship' => 'sgt_vattuxuat_sgt_xuatkho',
  'source' => 'non-db',
  'module' => 'sgt_xuatkho',
  'bean_name' => false,
  'vname' => 'LBL_SGT_VATTUXUAT_SGT_XUATKHO_FROM_SGT_XUATKHO_TITLE',
  'id_name' => 'sgt_vattuxuat_sgt_xuatkhosgt_xuatkho_ida',
);
$dictionary["sgt_vattuxuat"]["fields"]["sgt_vattuxuat_sgt_xuatkho_name"] = array (
  'name' => 'sgt_vattuxuat_sgt_xuatkho_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_VATTUXUAT_SGT_XUATKHO_FROM_SGT_XUATKHO_TITLE',
  'save' => true,
  'id_name' => 'sgt_vattuxuat_sgt_xuatkhosgt_xuatkho_ida',
  'link' => 'sgt_vattuxuat_sgt_xuatkho',
  'table' => 'sgt_xuatkho',
  'module' => 'sgt_xuatkho',
  'rname' => 'name',
);
$dictionary["sgt_vattuxuat"]["fields"]["sgt_vattuxuat_sgt_xuatkhosgt_xuatkho_ida"] = array (
  'name' => 'sgt_vattuxuat_sgt_xuatkhosgt_xuatkho_ida',
  'type' => 'link',
  'relationship' => 'sgt_vattuxuat_sgt_xuatkho',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_VATTUXUAT_SGT_XUATKHO_FROM_SGT_VATTUXUAT_TITLE',
);
