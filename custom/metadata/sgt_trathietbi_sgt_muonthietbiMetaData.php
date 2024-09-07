<?php
// created: 2024-07-03 10:09:17
$dictionary["sgt_trathietbi_sgt_muonthietbi"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_trathietbi_sgt_muonthietbi' => 
    array (
      'lhs_module' => 'sgt_muonthietbi',
      'lhs_table' => 'sgt_muonthietbi',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_trathietbi',
      'rhs_table' => 'sgt_trathietbi',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_trathietbi_sgt_muonthietbi_c',
      'join_key_lhs' => 'sgt_trathietbi_sgt_muonthietbisgt_muonthietbi_ida',
      'join_key_rhs' => 'sgt_trathietbi_sgt_muonthietbisgt_trathietbi_idb',
    ),
  ),
  'table' => 'sgt_trathietbi_sgt_muonthietbi_c',
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
      'name' => 'sgt_trathietbi_sgt_muonthietbisgt_muonthietbi_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_trathietbi_sgt_muonthietbisgt_trathietbi_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_trathietbi_sgt_muonthietbispk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_trathietbi_sgt_muonthietbi_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_trathietbi_sgt_muonthietbisgt_muonthietbi_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_trathietbi_sgt_muonthietbi_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_trathietbi_sgt_muonthietbisgt_trathietbi_idb',
      ),
    ),
  ),
);