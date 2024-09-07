<?php
// created: 2024-05-10 15:07:50
$dictionary["sgt_vattumua"]["fields"]["sgt_vattumua_sgt_muahang"] = array (
  'name' => 'sgt_vattumua_sgt_muahang',
  'type' => 'link',
  'relationship' => 'sgt_vattumua_sgt_muahang',
  'source' => 'non-db',
  'module' => 'sgt_muahang',
  'bean_name' => false,
  'vname' => 'LBL_SGT_VATTUMUA_SGT_MUAHANG_FROM_SGT_MUAHANG_TITLE',
  'id_name' => 'sgt_vattumua_sgt_muahangsgt_muahang_ida',
);
$dictionary["sgt_vattumua"]["fields"]["sgt_vattumua_sgt_muahang_name"] = array (
  'name' => 'sgt_vattumua_sgt_muahang_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_VATTUMUA_SGT_MUAHANG_FROM_SGT_MUAHANG_TITLE',
  'save' => true,
  'id_name' => 'sgt_vattumua_sgt_muahangsgt_muahang_ida',
  'link' => 'sgt_vattumua_sgt_muahang',
  'table' => 'sgt_muahang',
  'module' => 'sgt_muahang',
  'rname' => 'name',
);
$dictionary["sgt_vattumua"]["fields"]["sgt_vattumua_sgt_muahangsgt_muahang_ida"] = array (
  'name' => 'sgt_vattumua_sgt_muahangsgt_muahang_ida',
  'type' => 'link',
  'relationship' => 'sgt_vattumua_sgt_muahang',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_VATTUMUA_SGT_MUAHANG_FROM_SGT_VATTUMUA_TITLE',
);
