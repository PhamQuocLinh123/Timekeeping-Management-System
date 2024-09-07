<?php
$module_name = 'sgt_vangmat';
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
            'name' => 'ma_nv',
            'label' => 'LBL_MA_NV',
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
            'name' => 'lydo',
            'studio' => 'visible',
            'label' => 'LBL_LYDO',
          ),
          1 => 
          array (
            'name' => 'pheduyet',
            'label' => 'LBL_PHEDUYET',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tongsongay',
            'label' => 'LBL_TONGSONGAY',
          ),
          1 => 
          array (
            'name' => 'tg_ngaydanghi',
            'label' => 'LBL_TG_NGAYDANGHI',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nghitrongnam',
            'label' => 'LBL_NGHITRONGNAM',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
        6 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
