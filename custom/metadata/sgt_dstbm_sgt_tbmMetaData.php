<?php
// created: 2024-08-05 07:19:09
$dictionary["sgt_dstbm_sgt_tbm"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_dstbm_sgt_tbm' => 
    array (
      'lhs_module' => 'sgt_tbm',
      'lhs_table' => 'sgt_tbm',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_dstbm',
      'rhs_table' => 'sgt_dstbm',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_dstbm_sgt_tbm_c',
      'join_key_lhs' => 'sgt_dstbm_sgt_tbmsgt_tbm_ida',
      'join_key_rhs' => 'sgt_dstbm_sgt_tbmsgt_dstbm_idb',
    ),
  ),
  'table' => 'sgt_dstbm_sgt_tbm_c',
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
      'name' => 'sgt_dstbm_sgt_tbmsgt_tbm_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_dstbm_sgt_tbmsgt_dstbm_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_dstbm_sgt_tbmspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_dstbm_sgt_tbm_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_dstbm_sgt_tbmsgt_tbm_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_dstbm_sgt_tbm_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_dstbm_sgt_tbmsgt_dstbm_idb',
      ),
    ),
  ),
);