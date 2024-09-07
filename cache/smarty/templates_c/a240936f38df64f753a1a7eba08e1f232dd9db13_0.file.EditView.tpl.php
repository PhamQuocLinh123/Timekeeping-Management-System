<?php
/* Smarty version 4.3.1, created on 2024-09-04 16:34:40
  from '/var/www/html/asungvina/cache/themes/SuiteP/modules/sgt_vangmat/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d829b0440751_72750111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a240936f38df64f753a1a7eba08e1f232dd9db13' => 
    array (
      0 => '/var/www/html/asungvina/cache/themes/SuiteP/modules/sgt_vangmat/EditView.tpl',
      1 => 1725442480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d829b0440751_72750111 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),1=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_include.php','function'=>'smarty_function_sugar_include',),2=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/block.minify.php','function'=>'smarty_block_minify',),4=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),5=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),6=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>


<?php echo '<script'; ?>
>
    
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    
<?php echo '</script'; ?>
>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['enctype']->value;?>
>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<?php if ((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true") {?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php } else { ?>
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php }?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module'];?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action'];?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id'];?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if ((!empty($_REQUEST['return_module']) || !empty($_REQUEST['relate_to'])) && !((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true")) {?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']) {
echo $_REQUEST['return_relationship'];
} elseif ($_REQUEST['relate_to'] && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['relate_to'];
} elseif (empty($_smarty_tpl->tpl_vars['isDCForm']->value) && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['return_module'];
}?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id'];?>
">
<?php }?>
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<?php $_smarty_tpl->_assignInScope('place', "_HEADER");?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($_smarty_tpl->tpl_vars['isDuplicate']->value) {?>_form.return_id.value=''; <?php }?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" id="SAVE"><?php }?> 
<?php if (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_REQUEST['return_id']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" type="button" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) && empty($_REQUEST['return_id'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && !empty($_REQUEST['return_module'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action'];?>
&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (empty($_REQUEST['return_action']) || empty($_REQUEST['return_id']) && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=sgt_vangmat'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } else { ?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php }
if ($_smarty_tpl->tpl_vars['showVCRControl']->value) {?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>

</button>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=sgt_vangmat", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</div>
</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'sgt_vangmat'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="nhanvien">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NHANVIEN">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NHANVIEN','module'=>'sgt_vangmat'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="nhanvien"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['name'];?>
" class="sqsEnabled" tabindex="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['name'];?>
" size="" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['value'];?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['id_name'];?>
" 
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['id_name'];?>
" 
value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_id_c']['value'];?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['name'];?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_SELECT_BUTTON_TITLE"),$_smarty_tpl);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_SELECT_BUTTON_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
"<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['module'];?>
", 
600, 
400, 
"", 
true, 
false, 
{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"sgt_nhanvien_id_c","name":"nhanvien"}}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['name'];?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_RELATE_TITLE"),$_smarty_tpl);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['id_name'];?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_RELATE_LABEL"),$_smarty_tpl);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['nhanvien']['name'];?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="lydo">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LYDO">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LYDO','module'=>'sgt_vangmat'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="lydo"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['lydo']['name'];?>
"
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['lydo']['name'];?>
"
title=''              
>
<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['lydo']['value']))) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['lydo']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['lydo']['value']),$_smarty_tpl);?>

<?php } else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['lydo']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['lydo']['default']),$_smarty_tpl);?>

<?php }?>
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="tungay">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TUNGAY">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TUNGAY','module'=>'sgt_vangmat'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="tungay"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span class="dateTime">
<?php $_smarty_tpl->_assignInScope('date_value', $_smarty_tpl->tpl_vars['fields']->value['tungay']['value']);?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['tungay']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['tungay']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
" title=''  tabindex='0'    size="11" maxlength="10" style="width:50%;" >
<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['tungay']['name'];?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"></span></button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['tungay']['name'];?>
",
form : "EditView",
ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
button : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['tungay']['name'];?>
_trigger",
singleClick : true,
dateStr : "<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
",
startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
step : 1,
weekNumbers:false
}
);
<?php echo '</script'; ?>
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="denngay">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DENNGAY">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DENNGAY','module'=>'sgt_vangmat'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="denngay"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span class="dateTime">
<?php $_smarty_tpl->_assignInScope('date_value', $_smarty_tpl->tpl_vars['fields']->value['denngay']['value']);?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['denngay']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['denngay']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
" title=''  tabindex='0'    size="11" maxlength="10" style="width:50%;" >
<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['denngay']['name'];?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"></span></button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['denngay']['name'];?>
",
form : "EditView",
ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
button : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['denngay']['name'];?>
_trigger",
singleClick : true,
dateStr : "<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
",
startWeekday: <?php echo (($tmp = $_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value ?? null)===null||$tmp==='' ? '0' ?? null : $tmp);?>
,
step : 1,
weekNumbers:false
}
);
<?php echo '</script'; ?>
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="">
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="pheduyet">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHEDUYET">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHEDUYET','module'=>'sgt_vangmat'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="pheduyet"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['pheduyet']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['pheduyet']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['pheduyet']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['pheduyet']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['pheduyet']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['pheduyet']['name'];?>
" 
value="1" title='' tabindex="0" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php echo '<script'; ?>
 language="javascript">
    var _form_id = '<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
';
    
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_assignInScope('place', "_FOOTER");?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($_smarty_tpl->tpl_vars['isDuplicate']->value) {?>_form.return_id.value=''; <?php }?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" id="SAVE"><?php }?> 
<?php if (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_REQUEST['return_id']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" type="button" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) && empty($_REQUEST['return_id'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && !empty($_REQUEST['return_module'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action'];?>
&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (empty($_REQUEST['return_action']) || empty($_REQUEST['return_id']) && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=sgt_vangmat'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } else { ?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php }
if ($_smarty_tpl->tpl_vars['showVCRControl']->value) {?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>

</button>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=sgt_vangmat", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</div>
</form>
<?php echo $_smarty_tpl->tpl_vars['set_focus_block']->value;?>

<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^tab-content-(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Ngày tạo' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Ngày chỉnh sửa' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_NAME','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_ID','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_NAME','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'loaivangmat', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LOAIVANGMAT','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'pheduyet', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PHEDUYET','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'tungay', 'date', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TUNGAY','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'denngay', 'date', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DENNGAY','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'lydo', 'enum', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LYDO','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'sgt_nhanvien_id_c', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NHANVIEN_SGT_NHANVIEN_ID','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'nhanvien', 'relate', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NHANVIEN','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'ma_nv', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MA_NV','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'tongsongay', 'int', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TONGSONGAY','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'nghitrongnam', 'int', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NGHITRONGNAM','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'tg_ngaydanghi', 'int', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TG_NGAYDANGHI','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'nhanvien', 'alpha', true,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_NHANVIEN','module'=>'sgt_vangmat','for_js'=>true),$_smarty_tpl);?>
', 'sgt_nhanvien_id_c' );
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_nhanvien']={"form":"EditView","method":"query","modules":["sgt_nhanvien"],"group":"or","field_list":["name","id"],"populate_list":["nhanvien","sgt_nhanvien_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng tr\u00f9ng kh\u1edbp"};<?php echo '</script'; ?>
>
<?php }
}
