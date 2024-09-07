<?php
$module_name = 'sgt_vattuxuat';
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
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'ma_vt',
            'label' => 'LBL_MA_VT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'soluong',
            'label' => 'LBL_SOLUONG',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'loai',
            'studio' => 'visible',
            'label' => 'LBL_LOAI',
          ),
          1 => 
          array (
            'name' => 'nguoisudung',
            'studio' => 'visible',
            'label' => 'LBL_NGUOISUDUNG',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'sgt_vattuxuat_sgt_xuatkho_name',
          ),
          1 => 
          array (
            'name' => 'tenkho',
            'studio' => 'visible',
            'label' => 'LBL_TENKHO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'dvt',
            'studio' => 'visible',
            'label' => 'LBL_DVT',
          ),
        ),
        5 => 
        array (
          0 => 'description',
        ),
        6 => 
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
      ),
    ),
  ),
);
;
?>
