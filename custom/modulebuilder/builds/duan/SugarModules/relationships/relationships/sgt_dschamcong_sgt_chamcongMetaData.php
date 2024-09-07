<?php
// created: 2024-05-02 14:18:48
$dictionary["sgt_dschamcong_sgt_chamcong"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_dschamcong_sgt_chamcong' => 
    array (
      'lhs_module' => 'sgt_chamcong',
      'lhs_table' => 'sgt_chamcong',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_dschamcong',
      'rhs_table' => 'sgt_dschamcong',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_dschamcong_sgt_chamcong_c',
      'join_key_lhs' => 'sgt_dschamcong_sgt_chamcongsgt_chamcong_ida',
      'join_key_rhs' => 'sgt_dschamcong_sgt_chamcongsgt_dschamcong_idb',
    ),
  ),
  'table' => 'sgt_dschamcong_sgt_chamcong_c',
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
      'name' => 'sgt_dschamcong_sgt_chamcongsgt_chamcong_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_dschamcong_sgt_chamcongsgt_dschamcong_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_dschamcong_sgt_chamcongspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_dschamcong_sgt_chamcong_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_dschamcong_sgt_chamcongsgt_chamcong_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_dschamcong_sgt_chamcong_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_dschamcong_sgt_chamcongsgt_dschamcong_idb',
      ),
    ),
  ),
);