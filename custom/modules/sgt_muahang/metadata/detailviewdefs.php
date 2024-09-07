<?php
$module_name = 'sgt_muahang';
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
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'duyetMuahang\';" value="{$MOD.LBL_DUYETMUAHANG}">',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_DUYETMUAHANG}',
              'htmlOptions' =>
              array (
                'class' => 'button',
                'id' => 'duyet_muahang_button',
                'title' => '{$MOD.LBL_DUYETMUAHANG}',
                'onclick' => 'this.form.action.value=\'duyetMuahang\';',
                'name' => 'Duyệt mua hàng',
              ),
            ),
          ),
          2 =>
          array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'createPhieunhapkho\';" value="{$MOD.LBL_CREATE_PHIEUNHAPKHO}">',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CREATE_PHIEUNHAPKHO}',
              'htmlOptions' =>
              array (
                'class' => 'button',
                'id' => 'create_phieunhapkho_button',
                'title' => '{$MOD.LBL_CREATE_PHIEUNHAPKHO}',
                'onclick' => 'this.form.action.value=\'createPhieunhapkho\';',
                'name' => 'Đề nghị nhập kho',
              ),
            ),
          ),
          3 => 'DELETE',
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
            'name' => 'nguoidexuat',
            'studio' => 'visible',
            'label' => 'LBL_NGUOIDEXUAT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'tonggiamua',
            'label' => 'LBL_TONGGIAMUA',
          ),
          1 => 
          array (
            'name' => 'duan',
            'studio' => 'visible',
            'label' => 'LBL_DUAN',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'pheduyet',
            'studio' => 'visible',
            'label' => 'LBL_PHEDUYET',
          ),
          1 => 
          array (
            'name' => 'tinhtrang',
            'studio' => 'visible',
            'label' => 'LBL_TINHTRANG',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ngaydathang',
            'label' => 'LBL_NGAYDATHANG',
          ),
          1 => 
          array (
            'name' => 'ngaydexuat',
            'label' => 'LBL_NGAYDEXUAT',
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
