<?php
$module_name = 'sgt_tbm';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
            'name' => 'ngay_tbm',
            'label' => 'LBL_NGAY_TBM',
          ),
          1 => 
          array (
            'name' => 'duan',
            'studio' => 'visible',
            'label' => 'LBL_DUAN',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'calamviec',
            'studio' => 'visible',
            'label' => 'LBL_CALAMVIEC',
          ),
          1 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
