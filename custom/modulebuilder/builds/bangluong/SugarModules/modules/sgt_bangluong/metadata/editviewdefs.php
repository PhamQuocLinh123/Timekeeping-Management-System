<?php
$module_name = 'sgt_bangluong';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'ngaytinhluong',
            'label' => 'LBL_NGAYTINHLUONG',
          ),
          1 => 
          array (
            'name' => 'sgt_bangluong_sgt_duan_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tungay',
            'label' => 'LBL_TUNGAY',
          ),
          1 => 
          array (
            'name' => 'denngay',
            'label' => 'LBL_DENNGAY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
