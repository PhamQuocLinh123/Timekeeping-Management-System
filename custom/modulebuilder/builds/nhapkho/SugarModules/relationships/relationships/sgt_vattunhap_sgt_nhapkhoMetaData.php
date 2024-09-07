<?php
// created: 2024-05-10 15:08:07
$dictionary["sgt_vattunhap_sgt_nhapkho"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_vattunhap_sgt_nhapkho' => 
    array (
      'lhs_module' => 'sgt_nhapkho',
      'lhs_table' => 'sgt_nhapkho',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_vattunhap',
      'rhs_table' => 'sgt_vattunhap',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_vattunhap_sgt_nhapkho_c',
      'join_key_lhs' => 'sgt_vattunhap_sgt_nhapkhosgt_nhapkho_ida',
      'join_key_rhs' => 'sgt_vattunhap_sgt_nhapkhosgt_vattunhap_idb',
    ),
  ),
  'table' => 'sgt_vattunhap_sgt_nhapkho_c',
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
      'name' => 'sgt_vattunhap_sgt_nhapkhosgt_nhapkho_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_vattunhap_sgt_nhapkhosgt_vattunhap_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_vattunhap_sgt_nhapkhospk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_vattunhap_sgt_nhapkho_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_vattunhap_sgt_nhapkhosgt_nhapkho_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_vattunhap_sgt_nhapkho_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_vattunhap_sgt_nhapkhosgt_vattunhap_idb',
      ),
    ),
  ),
);