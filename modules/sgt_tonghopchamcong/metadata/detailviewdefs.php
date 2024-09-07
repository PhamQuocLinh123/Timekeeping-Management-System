<?php
$module_name = 'sgt_tonghopchamcong';
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
          //Thêm nút button xuất Excel
          4 => 
          array (
            'customCode' => '<input type="button" class="button" value="Xuất danh sách Excel" onclick="window.open(\'index.php?module=sgt_tonghopchamcong&action=tonghop_excel&record={$fields.id.value}\', \'_blank\')" />',

          ),
          //
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
            'name' => 'duan',
            'studio' => 'visible',
            'label' => 'LBL_DUAN',
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
            'name' => 'tonggiocong',
            'label' => 'LBL_TONGGIOCONG',
          ),
          1 => 
          array (
            'name' => 'tongnhanvien',
            'label' => 'LBL_TONGNHANVIEN',
          ),
        ),
        3 => 
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
        4 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
