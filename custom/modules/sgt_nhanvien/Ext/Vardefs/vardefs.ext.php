<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2024-05-10 15:09:34
$dictionary["sgt_nhanvien"]["fields"]["sgt_tamung_sgt_nhanvien"] = array (
  'name' => 'sgt_tamung_sgt_nhanvien',
  'type' => 'link',
  'relationship' => 'sgt_tamung_sgt_nhanvien',
  'source' => 'non-db',
  'module' => 'sgt_tamung',
  'bean_name' => 'sgt_tamung',
  'side' => 'right',
  'vname' => 'LBL_SGT_TAMUNG_SGT_NHANVIEN_FROM_SGT_TAMUNG_TITLE',
);


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


// created: 2024-05-02 14:19:37
$dictionary["sgt_nhanvien"]["fields"]["sgt_dsluong_sgt_nhanvien"] = array (
  'name' => 'sgt_dsluong_sgt_nhanvien',
  'type' => 'link',
  'relationship' => 'sgt_dsluong_sgt_nhanvien',
  'source' => 'non-db',
  'module' => 'sgt_dsluong',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_SGT_DSLUONG_SGT_NHANVIEN_FROM_SGT_DSLUONG_TITLE',
);


// created: 2024-05-02 14:19:23
$dictionary["sgt_nhanvien"]["fields"]["sgt_atld_sgt_nhanvien"] = array (
  'name' => 'sgt_atld_sgt_nhanvien',
  'type' => 'link',
  'relationship' => 'sgt_atld_sgt_nhanvien',
  'source' => 'non-db',
  'module' => 'sgt_atld',
  'bean_name' => 'sgt_atld',
  'side' => 'right',
  'vname' => 'LBL_SGT_ATLD_SGT_NHANVIEN_FROM_SGT_ATLD_TITLE',
);


// created: 2024-05-02 14:19:23
$dictionary["sgt_nhanvien"]["fields"]["sgt_nhanvien_sgt_duan"] = array (
  'name' => 'sgt_nhanvien_sgt_duan',
  'type' => 'link',
  'relationship' => 'sgt_nhanvien_sgt_duan',
  'source' => 'non-db',
  'module' => 'sgt_duan',
  'bean_name' => 'sgt_duan',
  'vname' => 'LBL_SGT_NHANVIEN_SGT_DUAN_FROM_SGT_DUAN_TITLE',
);


 // created: 2024-07-22 13:11:24
$dictionary['sgt_nhanvien']['fields']['bophan']['required']=false;
$dictionary['sgt_nhanvien']['fields']['bophan']['massupdate']='1';

 

 // created: 2024-09-04 09:28:11
$dictionary['sgt_nhanvien']['fields']['ncc']['inline_edit']=true;
$dictionary['sgt_nhanvien']['fields']['ncc']['merge_filter']='disabled';

 
?>