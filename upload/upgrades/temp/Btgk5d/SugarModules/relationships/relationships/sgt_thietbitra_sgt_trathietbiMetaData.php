<?php
// created: 2024-05-10 15:09:10
$dictionary["sgt_thietbitra_sgt_trathietbi"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_thietbitra_sgt_trathietbi' => 
    array (
      'lhs_module' => 'sgt_trathietbi',
      'lhs_table' => 'sgt_trathietbi',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_thietbitra',
      'rhs_table' => 'sgt_thietbitra',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_thietbitra_sgt_trathietbi_c',
      'join_key_lhs' => 'sgt_thietbitra_sgt_trathietbisgt_trathietbi_ida',
      'join_key_rhs' => 'sgt_thietbitra_sgt_trathietbisgt_thietbitra_idb',
    ),
  ),
  'table' => 'sgt_thietbitra_sgt_trathietbi_c',
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
      'name' => 'sgt_thietbitra_sgt_trathietbisgt_trathietbi_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_thietbitra_sgt_trathietbisgt_thietbitra_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_thietbitra_sgt_trathietbispk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_thietbitra_sgt_trathietbi_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_thietbitra_sgt_trathietbisgt_trathietbi_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_thietbitra_sgt_trathietbi_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_thietbitra_sgt_trathietbisgt_thietbitra_idb',
      ),
    ),
  ),
);