<?php
// created: 2024-08-15 13:42:38
$dictionary["sgt_chitietnv"]["fields"]["sgt_chitietnv_sgt_tonghopchamcong"] = array (
  'name' => 'sgt_chitietnv_sgt_tonghopchamcong',
  'type' => 'link',
  'relationship' => 'sgt_chitietnv_sgt_tonghopchamcong',
  'source' => 'non-db',
  'module' => 'sgt_tonghopchamcong',
  'bean_name' => 'sgt_tonghopchamcong',
  'vname' => 'LBL_SGT_CHITIETNV_SGT_TONGHOPCHAMCONG_FROM_SGT_TONGHOPCHAMCONG_TITLE',
  'id_name' => 'sgt_chitietnv_sgt_tonghopchamcongsgt_tonghopchamcong_ida',
);
$dictionary["sgt_chitietnv"]["fields"]["sgt_chitietnv_sgt_tonghopchamcong_name"] = array (
  'name' => 'sgt_chitietnv_sgt_tonghopchamcong_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_CHITIETNV_SGT_TONGHOPCHAMCONG_FROM_SGT_TONGHOPCHAMCONG_TITLE',
  'save' => true,
  'id_name' => 'sgt_chitietnv_sgt_tonghopchamcongsgt_tonghopchamcong_ida',
  'link' => 'sgt_chitietnv_sgt_tonghopchamcong',
  'table' => 'sgt_tonghopchamcong',
  'module' => 'sgt_tonghopchamcong',
  'rname' => 'name',
);
$dictionary["sgt_chitietnv"]["fields"]["sgt_chitietnv_sgt_tonghopchamcongsgt_tonghopchamcong_ida"] = array (
  'name' => 'sgt_chitietnv_sgt_tonghopchamcongsgt_tonghopchamcong_ida',
  'type' => 'link',
  'relationship' => 'sgt_chitietnv_sgt_tonghopchamcong',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_CHITIETNV_SGT_TONGHOPCHAMCONG_FROM_SGT_CHITIETNV_TITLE',
);
