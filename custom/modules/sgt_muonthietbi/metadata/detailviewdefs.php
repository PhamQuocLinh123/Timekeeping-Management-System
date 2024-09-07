<?php
$module_name = 'sgt_muonthietbi';
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
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'xacnhanmuon\';" value="{$MOD.LBL_XACNHANMUON}">',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_XACNHANMUON}',
              'htmlOptions' =>
              array (
                'class' => 'button',
                'id' => 'xaxnhanmuon_button',
                'title' => '{$MOD.LBL_XACNHANMUON}',
                'onclick' => 'this.form.action.value=\'xacnhanmuon\';',
                'name' => 'Xác nhận mượn',
              ),
            ),
          ),
          2 => 'DELETE',
          3 =>
	  array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'createTrathietbi\';" value="{$MOD.LBL_TRATHIETBI}">',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_TRATHIETBI}',
              'htmlOptions' =>
              array (
                'class' => 'button',
                'id' => 'trathietbi_button',
                'title' => '{$MOD.LBL_TRATHIETBI}',
                'onclick' => 'this.form.action.value=\'createTrathietbi\';',
                'name' => 'Trả thiết bị',
              ),
            ),
          ),
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
            'name' => 'ngaymuon',
            'label' => 'LBL_NGAYMUON',
          ),
          1 => 
          array (
            'name' => 'ngaydukien',
            'label' => 'LBL_NGAYDUKIEN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nguoimuon',
            'studio' => 'visible',
            'label' => 'LBL_NGUOIMUON',
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
            'name' => 'tenkho',
            'studio' => 'visible',
            'label' => 'LBL_TENKHO',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'xacnhan',
            'studio' => 'visible',
            'label' => 'LBL_XACNHAN',
          ),
          1 => 
          array (
            'name' => 'tinhtrang',
            'studio' => 'visible',
            'label' => 'LBL_TINHTRANG',
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
