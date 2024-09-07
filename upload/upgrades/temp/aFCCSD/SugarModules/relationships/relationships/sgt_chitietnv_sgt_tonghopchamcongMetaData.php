<?php
// created: 2024-08-20 10:38:50
$dictionary["sgt_chitietnv_sgt_tonghopchamcong"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'sgt_chitietnv_sgt_tonghopchamcong' => 
    array (
      'lhs_module' => 'sgt_tonghopchamcong',
      'lhs_table' => 'sgt_tonghopchamcong',
      'lhs_key' => 'id',
      'rhs_module' => 'sgt_chitietnv',
      'rhs_table' => 'sgt_chitietnv',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'sgt_chitietnv_sgt_tonghopchamcong_c',
      'join_key_lhs' => 'sgt_chitietnv_sgt_tonghopchamcongsgt_tonghopchamcong_ida',
      'join_key_rhs' => 'sgt_chitietnv_sgt_tonghopchamcongsgt_chitietnv_idb',
    ),
  ),
  'table' => 'sgt_chitietnv_sgt_tonghopchamcong_c',
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
      'name' => 'sgt_chitietnv_sgt_tonghopchamcongsgt_tonghopchamcong_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'sgt_chitietnv_sgt_tonghopchamcongsgt_chitietnv_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'sgt_chitietnv_sgt_tonghopchamcongspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'sgt_chitietnv_sgt_tonghopchamcong_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'sgt_chitietnv_sgt_tonghopchamcongsgt_tonghopchamcong_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'sgt_chitietnv_sgt_tonghopchamcong_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'sgt_chitietnv_sgt_tonghopchamcongsgt_chitietnv_idb',
      ),
    ),
  ),
);