<?php
$module_name = 'sgt_nhapkho';
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
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'xacnhan_nhapkho\';" value="{$MOD.LBL_DANHAPKHO}">',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_DANHAPKHO}',
              'htmlOptions' =>
              array (
                'class' => 'button',
                'id' => 'xacnhan_nhapkho_button',
                'title' => '{$MOD.LBL_DANHAPKHO}',
                'onclick' => 'this.form.action.value=\'xacnhan_nhapkho\';',
                'name' => 'Xác nhận nhập kho',
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
            'name' => 'ngaynhap',
            'label' => 'LBL_NGAYNHAP',
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
            'name' => 'tenkho',
            'studio' => 'visible',
            'label' => 'LBL_TENKHO',
          ),
          1 => '',
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
