<?php
// created: 2024-07-19 15:14:02
$dictionary["sgt_dstangca_sgt_tangca"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_dstangca_sgt_tangca' => 
    array (
      'lhs_module' => 'sgt_tangca',
      'lhs_table' => 'sgt_tangca',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_dstangca',
      'rhs_table' => 'sgt_dstangca',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_dstangca_sgt_tangca_c',
      'join_key_lhs' => 'sgt_dstangca_sgt_tangcasgt_tangca_ida',
      'join_key_rhs' => 'sgt_dstangca_sgt_tangcasgt_dstangca_idb',
    ),
  ),
  'table' => 'sgt_dstangca_sgt_tangca_c',
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
      'name' => 'sgt_dstangca_sgt_tangcasgt_tangca_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_dstangca_sgt_tangcasgt_dstangca_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_dstangca_sgt_tangcaspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_dstangca_sgt_tangca_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_dstangca_sgt_tangcasgt_tangca_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_dstangca_sgt_tangca_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_dstangca_sgt_tangcasgt_dstangca_idb',
      ),
    ),
  ),
);