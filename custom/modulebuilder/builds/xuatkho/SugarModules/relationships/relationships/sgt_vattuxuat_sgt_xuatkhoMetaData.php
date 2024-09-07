<?php
// created: 2024-05-10 15:08:24
$dictionary["sgt_vattuxuat_sgt_xuatkho"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_vattuxuat_sgt_xuatkho' => 
    array (
      'lhs_module' => 'sgt_xuatkho',
      'lhs_table' => 'sgt_xuatkho',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_vattuxuat',
      'rhs_table' => 'sgt_vattuxuat',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_vattuxuat_sgt_xuatkho_c',
      'join_key_lhs' => 'sgt_vattuxuat_sgt_xuatkhosgt_xuatkho_ida',
      'join_key_rhs' => 'sgt_vattuxuat_sgt_xuatkhosgt_vattuxuat_idb',
    ),
  ),
  'table' => 'sgt_vattuxuat_sgt_xuatkho_c',
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
      'name' => 'sgt_vattuxuat_sgt_xuatkhosgt_xuatkho_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_vattuxuat_sgt_xuatkhosgt_vattuxuat_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_vattuxuat_sgt_xuatkhospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_vattuxuat_sgt_xuatkho_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_vattuxuat_sgt_xuatkhosgt_xuatkho_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_vattuxuat_sgt_xuatkho_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_vattuxuat_sgt_xuatkhosgt_vattuxuat_idb',
      ),
    ),
  ),
);