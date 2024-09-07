<?php
// created: 2024-05-10 15:08:55
$dictionary["sgt_thietbimuon_sgt_muonthietbi"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_thietbimuon_sgt_muonthietbi' => 
    array (
      'lhs_module' => 'sgt_muonthietbi',
      'lhs_table' => 'sgt_muonthietbi',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_thietbimuon',
      'rhs_table' => 'sgt_thietbimuon',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_thietbimuon_sgt_muonthietbi_c',
      'join_key_lhs' => 'sgt_thietbimuon_sgt_muonthietbisgt_muonthietbi_ida',
      'join_key_rhs' => 'sgt_thietbimuon_sgt_muonthietbisgt_thietbimuon_idb',
    ),
  ),
  'table' => 'sgt_thietbimuon_sgt_muonthietbi_c',
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
      'name' => 'sgt_thietbimuon_sgt_muonthietbisgt_muonthietbi_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_thietbimuon_sgt_muonthietbisgt_thietbimuon_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_thietbimuon_sgt_muonthietbispk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_thietbimuon_sgt_muonthietbi_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_thietbimuon_sgt_muonthietbisgt_muonthietbi_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_thietbimuon_sgt_muonthietbi_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_thietbimuon_sgt_muonthietbisgt_thietbimuon_idb',
      ),
    ),
  ),
);