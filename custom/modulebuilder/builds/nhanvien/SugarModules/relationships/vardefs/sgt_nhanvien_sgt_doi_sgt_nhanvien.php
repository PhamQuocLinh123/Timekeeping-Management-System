<?php
// created: 2024-05-02 14:19:23
$dictionary["sgt_nhanvien"]["fields"]["sgt_nhanvien_sgt_doi"] = array (
  'name' => 'sgt_nhanvien_sgt_doi',
  'type' => 'link',
  'relationship' => 'sgt_nhanvien_sgt_doi',
  'source' => 'non-db',
  'module' => 'sgt_doi',
  'bean_name' => 'sgt_doi',
  'vname' => 'LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE',
  'id_name' => 'sgt_nhanvien_sgt_doisgt_doi_ida',
);
$dictionary["sgt_nhanvien"]["fields"]["sgt_nhanvien_sgt_doi_name"] = array (
  'name' => 'sgt_nhanvien_sgt_doi_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE',
  'save' => true,
  'id_name' => 'sgt_nhanvien_sgt_doisgt_doi_ida',
  'link' => 'sgt_nhanvien_sgt_doi',
  'table' => 'sgt_doi',
  'module' => 'sgt_doi',
  'rname' => 'name',
);
$dictionary["sgt_nhanvien"]["fields"]["sgt_nhanvien_sgt_doisgt_doi_ida"] = array (
  'name' => 'sgt_nhanvien_sgt_doisgt_doi_ida',
  'type' => 'link',
  'relationship' => 'sgt_nhanvien_sgt_doi',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_NHANVIEN_TITLE',
);
