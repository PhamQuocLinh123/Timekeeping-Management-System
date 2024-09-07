<?php
$module_name = 'sgt_dstbm';
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
            'name' => 'giovao',
            'label' => 'LBL_GIOVAO',
          ),
          1 => 
          array (
            'name' => 'giora',
            'label' => 'LBL_GIORA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'chucdanh',
            'label' => 'LBL_CHUCDANH',
          ),
          1 => 'assigned_user_name',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ngay_tbm',
            'label' => 'LBL_NGAY_TBM',
          ),
          1 => 
          array (
            'name' => 'sgt_dstbm_sgt_tbm_name',
          ),
        ),
        4 => 
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
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
