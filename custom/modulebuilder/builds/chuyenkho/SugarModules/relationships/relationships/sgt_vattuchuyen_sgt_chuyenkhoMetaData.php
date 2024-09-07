<?php
// created: 2024-05-10 15:08:41
$dictionary["sgt_vattuchuyen_sgt_chuyenkho"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_vattuchuyen_sgt_chuyenkho' => 
    array (
      'lhs_module' => 'sgt_chuyenkho',
      'lhs_table' => 'sgt_chuyenkho',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_vattuchuyen',
      'rhs_table' => 'sgt_vattuchuyen',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_vattuchuyen_sgt_chuyenkho_c',
      'join_key_lhs' => 'sgt_vattuchuyen_sgt_chuyenkhosgt_chuyenkho_ida',
      'join_key_rhs' => 'sgt_vattuchuyen_sgt_chuyenkhosgt_vattuchuyen_idb',
    ),
  ),
  'table' => 'sgt_vattuchuyen_sgt_chuyenkho_c',
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
      'name' => 'sgt_vattuchuyen_sgt_chuyenkhosgt_chuyenkho_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_vattuchuyen_sgt_chuyenkhosgt_vattuchuyen_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_vattuchuyen_sgt_chuyenkhospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_vattuchuyen_sgt_chuyenkho_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_vattuchuyen_sgt_chuyenkhosgt_chuyenkho_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_vattuchuyen_sgt_chuyenkho_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_vattuchuyen_sgt_chuyenkhosgt_vattuchuyen_idb',
      ),
    ),
  ),
);