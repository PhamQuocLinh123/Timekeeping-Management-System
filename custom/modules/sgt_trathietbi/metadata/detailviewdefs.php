<?php
$module_name = 'sgt_trathietbi';
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
          1 => 
          array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'xacnhantra\';" value="{$MOD.LBL_XACNHANTRA}">',
            'sugar_html' => 
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_XACNHANTRA}',
              'htmlOptions' => 
              array (
                'class' => 'button',
                'id' => 'xacnhantra_button',
                'title' => '{$MOD.LBL_XACNHANTRA}',
                'onclick' => 'this.form.action.value=\'xacnhantra\';',
                'name' => 'Xác nhận tra',
              ),
            ),
          ),
          2 => 'DELETE',
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ngaytra',
            'label' => 'LBL_NGAYTRA',
          ),
          1 => 
          array (
            'name' => 'nguoitra',
            'studio' => 'visible',
            'label' => 'LBL_NGUOITRA',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tenkho',
            'studio' => 'visible',
            'label' => 'LBL_TENKHO',
          ),
          1 => 
          array (
            'name' => 'duan',
            'studio' => 'visible',
            'label' => 'LBL_DUAN',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tinhtrang',
            'studio' => 'visible',
            'label' => 'LBL_TINHTRANG',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 'description',
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
          0 => 
          array (
            'name' => 'sgt_trathietbi_sgt_muonthietbi_name',
          ),
        ),
      ),
    ),
  ),
);
;
?>
