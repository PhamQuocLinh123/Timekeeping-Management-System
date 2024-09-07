<?php
// created: 2024-05-02 14:19:23
$dictionary["sgt_nhanvien_sgt_doi"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_nhanvien_sgt_doi' => 
    array (
      'lhs_module' => 'sgt_doi',
      'lhs_table' => 'sgt_doi',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_nhanvien',
      'rhs_table' => 'sgt_nhanvien',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_nhanvien_sgt_doi_c',
      'join_key_lhs' => 'sgt_nhanvien_sgt_doisgt_doi_ida',
      'join_key_rhs' => 'sgt_nhanvien_sgt_doisgt_nhanvien_idb',
    ),
  ),
  'table' => 'sgt_nhanvien_sgt_doi_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'sgt_nhanvien_sgt_doisgt_doi_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_nhanvien_sgt_doisgt_nhanvien_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_nhanvien_sgt_doispk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_nhanvien_sgt_doi_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_nhanvien_sgt_doisgt_doi_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_nhanvien_sgt_doi_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_nhanvien_sgt_doisgt_nhanvien_idb',
      ),
    ),
  ),
);