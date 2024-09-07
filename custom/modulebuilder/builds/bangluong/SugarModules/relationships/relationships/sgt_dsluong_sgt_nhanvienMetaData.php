<?php
// created: 2024-05-02 14:19:37
$dictionary["sgt_dsluong_sgt_nhanvien"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_dsluong_sgt_nhanvien' => 
    array (
      'lhs_module' => 'sgt_nhanvien',
      'lhs_table' => 'sgt_nhanvien',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_dsluong',
      'rhs_table' => 'sgt_dsluong',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_dsluong_sgt_nhanvien_c',
      'join_key_lhs' => 'sgt_dsluong_sgt_nhanviensgt_nhanvien_ida',
      'join_key_rhs' => 'sgt_dsluong_sgt_nhanviensgt_dsluong_idb',
    ),
  ),
  'table' => 'sgt_dsluong_sgt_nhanvien_c',
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
      'name' => 'sgt_dsluong_sgt_nhanviensgt_nhanvien_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_dsluong_sgt_nhanviensgt_dsluong_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_dsluong_sgt_nhanvienspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_dsluong_sgt_nhanvien_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_dsluong_sgt_nhanviensgt_nhanvien_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_dsluong_sgt_nhanvien_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_dsluong_sgt_nhanviensgt_dsluong_idb',
      ),
    ),
  ),
);