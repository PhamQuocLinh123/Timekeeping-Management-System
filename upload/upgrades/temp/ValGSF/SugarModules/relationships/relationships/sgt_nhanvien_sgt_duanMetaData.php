<?php
// created: 2024-04-27 10:06:48
$dictionary["sgt_nhanvien_sgt_duan"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'sgt_nhanvien_sgt_duan' => 
    array (
      'lhs_module' => 'sgt_nhanvien',
      'lhs_table' => 'sgt_nhanvien',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_duan',
      'rhs_table' => 'sgt_duan',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_nhanvien_sgt_duan_c',
      'join_key_lhs' => 'sgt_nhanvien_sgt_duansgt_nhanvien_ida',
      'join_key_rhs' => 'sgt_nhanvien_sgt_duansgt_duan_idb',
    ),
  ),
  'table' => 'sgt_nhanvien_sgt_duan_c',
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
      'name' => 'sgt_nhanvien_sgt_duansgt_nhanvien_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_nhanvien_sgt_duansgt_duan_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_nhanvien_sgt_duanspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_nhanvien_sgt_duan_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_nhanvien_sgt_duansgt_nhanvien_ida',
        1 => 'sgt_nhanvien_sgt_duansgt_duan_idb',
      ),
    ),
  ),
);