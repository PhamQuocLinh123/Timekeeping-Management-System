<?php
$module_name = 'sgt_calamviec';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
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
          0 => 'name',
          1 => 
          array (
            'name' => 'sgt_calamviec_sgt_duan_name',
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
