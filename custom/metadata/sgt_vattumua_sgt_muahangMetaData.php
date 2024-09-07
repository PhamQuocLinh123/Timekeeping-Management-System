<?php
// created: 2024-05-10 15:07:50
$dictionary["sgt_vattumua_sgt_muahang"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_vattumua_sgt_muahang' => 
    array (
      'lhs_module' => 'sgt_muahang',
      'lhs_table' => 'sgt_muahang',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_vattumua',
      'rhs_table' => 'sgt_vattumua',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_vattumua_sgt_muahang_c',
      'join_key_lhs' => 'sgt_vattumua_sgt_muahangsgt_muahang_ida',
      'join_key_rhs' => 'sgt_vattumua_sgt_muahangsgt_vattumua_idb',
    ),
  ),
  'table' => 'sgt_vattumua_sgt_muahang_c',
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
      'name' => 'sgt_vattumua_sgt_muahangsgt_muahang_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_vattumua_sgt_muahangsgt_vattumua_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_vattumua_sgt_muahangspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_vattumua_sgt_muahang_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_vattumua_sgt_muahangsgt_muahang_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_vattumua_sgt_muahang_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_vattumua_sgt_muahangsgt_vattumua_idb',
      ),
    ),
  ),
);