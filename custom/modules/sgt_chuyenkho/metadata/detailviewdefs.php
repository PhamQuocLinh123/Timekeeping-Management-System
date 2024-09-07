<?php
$module_name = 'sgt_chuyenkho';
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
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'xacnhan_chuyenkho\';" value="{$MOD.LBL_DACHUYENKHO}">',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_DACHUYENKHO}',
              'htmlOptions' =>
              array (
                'class' => 'button',
                'id' => 'xacnhan_chuyenkho_button',
                'title' => '{$MOD.LBL_DACHUYENKHO}',
                'onclick' => 'this.form.action.value=\'xacnhan_chuyenkho\';',
                'name' => 'Xác nhận chuyển kho',
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
            'name' => 'ngaychuyen',
            'label' => 'LBL_NGAYCHUYEN',
          ),
          1 => 
          array (
            'name' => 'tinhtrang',
            'studio' => 'visible',
            'label' => 'LBL_TINHTRANG',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'tukho',
            'studio' => 'visible',
            'label' => 'LBL_TUKHO',
          ),
          1 => 
          array (
            'name' => 'denkho',
            'studio' => 'visible',
            'label' => 'LBL_DENKHO',
          ),
        ),
        3 => 
        array (
          0 => 'description',
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
      ),
    ),
  ),
);
;
?>
