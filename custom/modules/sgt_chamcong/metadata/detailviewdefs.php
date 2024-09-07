<?php
$module_name = 'sgt_chamcong';
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
          3 =>
	  array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'xacnhan_chamcong\';" value="{$MOD.LBL_DACHAMCONG}">',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_DACHAMCONG}',
              'htmlOptions' =>
              array (
                'class' => 'button',
                'id' => 'xacnhan_chamcong_button',
                'title' => '{$MOD.LBL_DACHAMCONG}',
                'onclick' => 'this.form.action.value=\'xacnhan_chamcong\';',
                'name' => 'Xác nhận chấm công',
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
          1 => 
          array (
            'name' => 'sgt_chamcong_sgt_duan_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'loaingay',
            'studio' => 'visible',
            'label' => 'LBL_LOAINGAY',
          ),
          1 => 
          array (
            'name' => 'heso',
            'studio' => 'visible',
            'label' => 'LBL_HESO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ngaychamcong',
            'label' => 'LBL_NGAYCHAMCONG',
          ),
          1 => 
          array (
            'name' => 'pheduyet',
            'studio' => 'visible',
            'label' => 'LBL_PHEDUYET',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'tong_nv',
            'label' => 'LBL_TONG_NV',
          ),
          1 => 
          array (
            'name' => 'tonggiocong',
            'label' => 'LBL_TONGGIOCONG',
          ),
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
      ),
    ),
  ),
);
;
?>
