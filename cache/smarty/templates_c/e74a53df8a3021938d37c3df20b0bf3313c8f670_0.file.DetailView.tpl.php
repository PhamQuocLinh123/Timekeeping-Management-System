<?php
/* Smarty version 4.3.1, created on 2024-09-05 08:58:42
  from '/var/www/html/asungvina/cache/themes/SuiteP/modules/sgt_nhanvien/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d91052970099_28105247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e74a53df8a3021938d37c3df20b0bf3313c8f670' => 
    array (
      0 => '/var/www/html/asungvina/cache/themes/SuiteP/modules/sgt_nhanvien/DetailView.tpl',
      1 => 1725501522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d91052970099_28105247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_include.php','function'=>'smarty_function_sugar_include',),1=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),2=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),3=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),4=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_phone.php','function'=>'smarty_function_sugar_phone',),5=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_number_format.php','function'=>'smarty_function_sugar_number_format',),6=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_ajax_url.php','function'=>'smarty_function_sugar_ajax_url',),7=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),));
?>


<?php echo '<script'; ?>
 language="javascript">
    
    SUGAR.util.doWhen(function () {
        return $("#contentTable").length == 0;
    }, SUGAR.themes.actionMenu);
    
<?php echo '</script'; ?>
>
<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
<form action="index.php" method="post" name="DetailView" id="formDetailView">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id">
<input type="hidden" name="module_tab">
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<input type="hidden" name="action" value="EditView">
<input type="hidden" name="sugar_body_only">
<?php if (!$_smarty_tpl->tpl_vars['config']->value['enable_action_menu']) {?>
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
" id="duplicate_button"><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit") && $_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUP_MERGE'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUP_MERGE'];?>
" id="merge_duplicate_button"><?php }?> 
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=sgt_nhanvien", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
<?php }?>
</form>
</div>
</td>
<td align="right" width="20%" class="buttons"><?php echo $_smarty_tpl->tpl_vars['ADMIN_EDIT']->value;?>

<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div class="detail-view">
<div class="mobile-pagination"><?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
</div>

<ul class="nav nav-tabs">

<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<li role="presentation" class="active">
<a id="tab0" data-toggle="tab" class="hidden-xs">
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'sgt_nhanvien'),$_smarty_tpl);?>

</a>
<a id="xstab0" href="#" class="visible-xs first-tab dropdown-toggle" data-toggle="dropdown">
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'sgt_nhanvien'),$_smarty_tpl);?>

</a>
</li>
<?php }
if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<li id="tab-actions" class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#">HÀNH ĐỘNG<span class="suitepicon suitepicon-action-caret"></span></a>
<ul class="dropdown-menu">
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"><?php }?> </li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
" id="duplicate_button"><?php }?> </li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form); return false;" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?> </li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit") && $_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUP_MERGE'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='sgt_nhanvien'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUP_MERGE'];?>
" id="merge_duplicate_button"><?php }?> </li>
<li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=sgt_nhanvien", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?></li>
</ul>
</li>
<li class="tab-inline-pagination">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</li>
<?php }?>
</ul>
<div class="clearfix"></div>

<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>

<div class="tab-content">
<?php } else { ?>

<div class="tab-content" style="padding: 0; border: 0;">
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>
<div class="tab-pane-NOBOOTSTRAPTOGGLER active fade in" id='tab-content-0'>





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="name" field="name" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ngaysinh">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NGAYSINH','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="ngaysinh" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>



<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['date_formatted_value'])) {
ob_start();
echo $_smarty_tpl->tpl_vars['vardef']->value['date_formatted_value'];
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('value', $_prefixVariable1);
} else {
if (strlen($_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['value']);
}
}?>
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="sodienthoai">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SODIENTHOAI','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit phone" type="phone" field="sodienthoai" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['sodienthoai']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['sodienthoai']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['sodienthoai']['value']);
echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>

<?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="cccd">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CCCD','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="cccd" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['cccd']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['cccd']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['cccd']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['cccd']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['cccd']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['cccd']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ma_nv">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MA_NV','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="ma_nv" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['ma_nv']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['ma_nv']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ma_nv']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ma_nv']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ma_nv']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['ma_nv']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="baohiem">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BAOHIEM','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="baohiem" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['baohiem']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['baohiem']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['baohiem']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['baohiem']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['baohiem']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['baohiem']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="diachi">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DIACHI','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="diachi" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['diachi']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['diachi']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['diachi']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['diachi']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['diachi']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['diachi']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="chucvu">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CHUCVU','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="chucvu" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['chucvu']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['chucvu']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['chucvu']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['chucvu']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['chucvu']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['chucvu']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="tenchamcong">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TENCHAMCONG','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="tenchamcong" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['tenchamcong']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['tenchamcong']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['tenchamcong']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['tenchamcong']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['tenchamcong']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['tenchamcong']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="gioitinh">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_GIOITINH','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="gioitinh" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['gioitinh']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>



<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['gioitinh']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['value'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['options'][$_smarty_tpl->tpl_vars['fields']->value['gioitinh']['value']];?>

<?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="cc">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CC','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="bool" field="cc" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['cc']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['cc']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['cc']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['cc']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['cc']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['cc']['name'];?>
" value="$fields.cc.value" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="vitri">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_VITRI','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="vitri" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['vitri']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['vitri']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['vitri']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['vitri']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['vitri']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['vitri']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="phongban">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHONGBAN','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="phongban" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['phongban']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phongban']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phongban']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phongban']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['phongban']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['phongban']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="bophan">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BOPHAN','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="bophan" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['bophan']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>



<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['bophan']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['value'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['options'][$_smarty_tpl->tpl_vars['fields']->value['bophan']['value']];?>

<?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="luongthoathuan">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LUONGTHOATHUAN','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="luongthoathuan" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['luongthoathuan']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['luongthoathuan']['name'];?>
'>
<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['fields']->value['luongthoathuan']['value']),$_smarty_tpl);?>

</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="phucap">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHUCAP','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="phucap" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['phucap']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phucap']['name'];?>
'>
<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['fields']->value['phucap']['value']),$_smarty_tpl);?>

</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="nganhang">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NGANHANG','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="nganhang" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['nganhang']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['nganhang']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['nganhang']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['nganhang']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['nganhang']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['nganhang']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="sotaikhoan">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SOTAIKHOAN','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="sotaikhoan" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="masothue">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MASOTHUE','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="masothue" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['masothue']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['masothue']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['masothue']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['masothue']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['masothue']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['masothue']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="dienthoaikhancap">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DIENTHOAIKHANCAP','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit phone" type="phone" field="dienthoaikhancap" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['dienthoaikhancap']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['dienthoaikhancap']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['dienthoaikhancap']['value']);
echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>

<?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ncc">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NCC','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="ncc" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['ncc']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['ncc_id_c']['value'])) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "detail_url", null);?>index.php?module=Accounts&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc_id_c']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url'=>$_smarty_tpl->tpl_vars['detail_url']->value),$_smarty_tpl);?>
"><?php }?>
<span id="ncc_id_c" class="sugar_field" data-id-value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc_id_c']['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['value'];?>
</span>
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['ncc_id_c']['value'])) {?></a><?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="hinhanh">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_HINHANH','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="image" field="hinhanh" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['hinhanh']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
">
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['hinhanh']['value']) <= 0) {?>
<img src="" style="max-width: <?php if (!$_smarty_tpl->tpl_vars['vardef']->value['width']) {?>120<?php } else { ?>200<?php }?>px;" height="<?php if (!$_smarty_tpl->tpl_vars['vardef']->value['height']) {
} else { ?>50<?php }?>">
<?php } else { ?>
<img src="index.php?entryPoint=download&id=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];
echo $_smarty_tpl->tpl_vars['fields']->value['width']['value'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" style="max-width: <?php if (!$_smarty_tpl->tpl_vars['vardef']->value['width']) {?>120<?php } else { ?>200<?php }?>px;" height="<?php if (!$_smarty_tpl->tpl_vars['vardef']->value['height']) {
} else { ?>50<?php }?>">
<?php }?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="sgt_nhanvien_sgt_doi_name">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="sgt_nhanvien_sgt_doi_name" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doisgt_doi_ida']['value'])) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "detail_url", null);?>index.php?module=sgt_doi&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doisgt_doi_ida']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url'=>$_smarty_tpl->tpl_vars['detail_url']->value),$_smarty_tpl);?>
"><?php }?>
<span id="sgt_nhanvien_sgt_doisgt_doi_ida" class="sugar_field" data-id-value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doisgt_doi_ida']['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['value'];?>
</span>
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doisgt_doi_ida']['value'])) {?></a><?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="loaica">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LOAICA','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="loaica" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['loaica']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>



<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['loaica']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['value'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['options'][$_smarty_tpl->tpl_vars['fields']->value['loaica']['value']];?>

<?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="text" field="description" colspan='3'>

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['description']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span class="sugar_field" id="<?php echo nl2br((string) url2html(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['description']['name'],'html')), (bool) 1);?>
"><?php echo nl2br((string) url2html(smarty_modifier_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['description']['value'],'html'),'html_entity_decode')), (bool) 1);?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>

</div>
<?php } else { ?>

<div class="tab-pane-NOBOOTSTRAPTOGGLER panel-collapse"></div>
<?php }?>
</div>

<div class="panel-content">
<div>&nbsp;</div>





<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] && $_smarty_tpl->tpl_vars['config']->value['enable_action_menu'] != false) {?>

<?php } else { ?>

<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse" href="#top-panel--1" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'sgt_nhanvien'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="top-panel--1" data-id="DEFAULT">
<div class="tab-content">
<!-- TAB CONTENT -->





<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="name" field="name" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ngaysinh">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NGAYSINH','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="date" field="ngaysinh" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>



<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['date_formatted_value'])) {
ob_start();
echo $_smarty_tpl->tpl_vars['vardef']->value['date_formatted_value'];
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('value', $_prefixVariable2);
} else {
if (strlen($_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['value']);
}
}?>
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="sodienthoai">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SODIENTHOAI','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit phone" type="phone" field="sodienthoai" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['sodienthoai']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['sodienthoai']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['sodienthoai']['value']);
echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>

<?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="cccd">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CCCD','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="cccd" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['cccd']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['cccd']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['cccd']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['cccd']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['cccd']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['cccd']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ma_nv">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MA_NV','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="ma_nv" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['ma_nv']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['ma_nv']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ma_nv']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ma_nv']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ma_nv']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['ma_nv']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="baohiem">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BAOHIEM','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="baohiem" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['baohiem']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['baohiem']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['baohiem']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['baohiem']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['baohiem']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['baohiem']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="diachi">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DIACHI','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="diachi" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['diachi']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['diachi']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['diachi']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['diachi']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['diachi']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['diachi']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="chucvu">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CHUCVU','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="chucvu" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['chucvu']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['chucvu']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['chucvu']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['chucvu']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['chucvu']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['chucvu']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="tenchamcong">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TENCHAMCONG','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="tenchamcong" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['tenchamcong']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['tenchamcong']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['tenchamcong']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['tenchamcong']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['tenchamcong']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['tenchamcong']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="gioitinh">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_GIOITINH','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="gioitinh" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['gioitinh']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>



<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['gioitinh']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['value'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['options'][$_smarty_tpl->tpl_vars['fields']->value['gioitinh']['value']];?>

<?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="cc">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CC','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="bool" field="cc" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['cc']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['cc']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['cc']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['cc']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['cc']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['cc']['name'];?>
" value="$fields.cc.value" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="vitri">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_VITRI','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="vitri" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['vitri']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['vitri']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['vitri']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['vitri']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['vitri']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['vitri']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="phongban">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHONGBAN','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="phongban" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['phongban']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phongban']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phongban']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phongban']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['phongban']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['phongban']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="bophan">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BOPHAN','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="bophan" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['bophan']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>



<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['bophan']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['value'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['options'][$_smarty_tpl->tpl_vars['fields']->value['bophan']['value']];?>

<?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="luongthoathuan">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LUONGTHOATHUAN','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="luongthoathuan" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['luongthoathuan']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['luongthoathuan']['name'];?>
'>
<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['fields']->value['luongthoathuan']['value']),$_smarty_tpl);?>

</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="phucap">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHUCAP','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="currency" field="phucap" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['phucap']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phucap']['name'];?>
'>
<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['fields']->value['phucap']['value']),$_smarty_tpl);?>

</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="nganhang">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NGANHANG','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="nganhang" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['nganhang']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['nganhang']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['nganhang']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['nganhang']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['nganhang']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['nganhang']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="sotaikhoan">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SOTAIKHOAN','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="sotaikhoan" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="masothue">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MASOTHUE','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="varchar" field="masothue" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['masothue']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['masothue']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['masothue']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['masothue']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['masothue']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['masothue']['value'];?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="dienthoaikhancap">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DIENTHOAIKHANCAP','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit phone" type="phone" field="dienthoaikhancap" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['dienthoaikhancap']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['dienthoaikhancap']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['dienthoaikhancap']['value']);
echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>

<?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="ncc">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NCC','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="ncc" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['ncc']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['ncc_id_c']['value'])) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "detail_url", null);?>index.php?module=Accounts&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc_id_c']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url'=>$_smarty_tpl->tpl_vars['detail_url']->value),$_smarty_tpl);?>
"><?php }?>
<span id="ncc_id_c" class="sugar_field" data-id-value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc_id_c']['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['value'];?>
</span>
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['ncc_id_c']['value'])) {?></a><?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="hinhanh">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_HINHANH','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="image" field="hinhanh" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['hinhanh']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
">
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['hinhanh']['value']) <= 0) {?>
<img src="" style="max-width: <?php if (!$_smarty_tpl->tpl_vars['vardef']->value['width']) {?>120<?php } else { ?>200<?php }?>px;" height="<?php if (!$_smarty_tpl->tpl_vars['vardef']->value['height']) {
} else { ?>50<?php }?>">
<?php } else { ?>
<img src="index.php?entryPoint=download&id=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];
echo $_smarty_tpl->tpl_vars['fields']->value['width']['value'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" style="max-width: <?php if (!$_smarty_tpl->tpl_vars['vardef']->value['width']) {?>120<?php } else { ?>200<?php }?>px;" height="<?php if (!$_smarty_tpl->tpl_vars['vardef']->value['height']) {
} else { ?>50<?php }?>">
<?php }?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="sgt_nhanvien_sgt_doi_name">


<div class="col-xs-12 col-sm-4 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="relate" field="sgt_nhanvien_sgt_doi_name" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doisgt_doi_ida']['value'])) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "detail_url", null);?>index.php?module=sgt_doi&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doisgt_doi_ida']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url'=>$_smarty_tpl->tpl_vars['detail_url']->value),$_smarty_tpl);?>
"><?php }?>
<span id="sgt_nhanvien_sgt_doisgt_doi_ida" class="sugar_field" data-id-value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doisgt_doi_ida']['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['value'];?>
</span>
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doisgt_doi_ida']['value'])) {?></a><?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>




<div class="col-xs-12 col-sm-6 detail-view-row-item" data-field="loaica">


<div class="col-xs-12 col-sm-4 label col-2-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LOAICA','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-8 detail-view-field inlineEdit" type="enum" field="loaica" >

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['loaica']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>



<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['loaica']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['value'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['options'][$_smarty_tpl->tpl_vars['fields']->value['loaica']['value']];?>

<?php }
}?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>


<div class="row detail-view-row">



<div class="col-xs-12 col-sm-12 detail-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label col-1-label">


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
</div>


<div class="col-xs-12 col-sm-10 detail-view-field inlineEdit" type="text" field="description" colspan='3'>

<?php if (!$_smarty_tpl->tpl_vars['fields']->value['description']['hidden']) {
echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span class="sugar_field" id="<?php echo nl2br((string) url2html(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['description']['name'],'html')), (bool) 1);?>
"><?php echo nl2br((string) url2html(smarty_modifier_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['description']['value'],'html'),'html_entity_decode')), (bool) 1);?>
</span>
<?php }?>

<div class="inlineEditIcon col-xs-hidden">
<span class="suitepicon suitepicon-action-edit"></span>
</div>
</div>


</div>

</div>

</div>
</div>
</div>
<?php }?>
</div>
</div>

</form>
<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>            <?php echo '<script'; ?>
 type="text/javascript" src="include/InlineEditing/inlineEditing.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="modules/Favorites/favorites.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

                    let selectTabDetailView = function(tab) {
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
                        $('#content div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
                        $('#content div.detail-view div.panel-content div.panel.panel').hide();
                        $('#content div.panel-content div.panel.tab-panel-' + tab).show();
                    };

                    var selectTabOnError = function(tab) {
                        selectTabDetailView(tab);
                        $('#content ul.nav.nav-tabs > li').removeClass('active');
                        $('#content ul.nav.nav-tabs > li a').css('color', '');

                        $('#content ul.nav.nav-tabs > li').eq(tab).find('a').first().css('color', 'red');
                        $('#content ul.nav.nav-tabs > li').eq(tab).addClass('active');

                    };

                    var selectTabOnErrorInputHandle = function(inputHandle) {
                        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
                        selectTabOnError(tab);
                    };


                    $(function(){
                        $('#content ul.nav.nav-tabs > li > a[data-toggle="tab"]').click(function(e){
                            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                                selectTabDetailView(tab);
                            }
                        });
                    });

                <?php echo '</script'; ?>
>
<?php }
}
