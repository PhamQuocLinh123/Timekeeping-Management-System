<?php
$module_name = 'sgt_calamviec';
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
            'name' => 'tenca',
            'studio' => 'visible',
            'label' => 'LBL_TENCA',
          ),
          1 => 
          array (
            'name' => 'sgt_calamviec_sgt_duan_name',
            'label' => 'LBL_SGT_CALAMVIEC_SGT_DUAN_FROM_SGT_DUAN_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'giovao',
            'label' => 'LBL_GIOVAO',
          ),
          1 => 
          array (
            'name' => 'giora',
            'label' => 'LBL_GIORA',
          ),
        ),
      ),
    ),
  ),
);
;
?>
