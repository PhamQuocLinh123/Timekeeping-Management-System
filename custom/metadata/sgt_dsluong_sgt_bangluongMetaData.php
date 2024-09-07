<?php
// created: 2024-05-02 14:19:37
$dictionary["sgt_dsluong_sgt_bangluong"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_dsluong_sgt_bangluong' => 
    array (
      'lhs_module' => 'sgt_bangluong',
      'lhs_table' => 'sgt_bangluong',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_dsluong',
      'rhs_table' => 'sgt_dsluong',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_dsluong_sgt_bangluong_c',
      'join_key_lhs' => 'sgt_dsluong_sgt_bangluongsgt_bangluong_ida',
      'join_key_rhs' => 'sgt_dsluong_sgt_bangluongsgt_dsluong_idb',
    ),
  ),
  'table' => 'sgt_dsluong_sgt_bangluong_c',
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
      'name' => 'sgt_dsluong_sgt_bangluongsgt_bangluong_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_dsluong_sgt_bangluongsgt_dsluong_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_dsluong_sgt_bangluongspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_dsluong_sgt_bangluong_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_dsluong_sgt_bangluongsgt_bangluong_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_dsluong_sgt_bangluong_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_dsluong_sgt_bangluongsgt_dsluong_idb',
      ),
    ),
  ),
);