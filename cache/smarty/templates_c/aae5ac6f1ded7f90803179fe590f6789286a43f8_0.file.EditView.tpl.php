<?php
/* Smarty version 4.3.1, created on 2024-09-06 15:38:45
  from '/var/www/html/asungvina/cache/themes/SuiteP/modules/sgt_nhanvien/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66dabf95a1aad3_94484965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aae5ac6f1ded7f90803179fe590f6789286a43f8' => 
    array (
      0 => '/var/www/html/asungvina/cache/themes/SuiteP/modules/sgt_nhanvien/EditView.tpl',
      1 => 1725611925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66dabf95a1aad3_94484965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),1=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_include.php','function'=>'smarty_function_sugar_include',),2=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/block.minify.php','function'=>'smarty_block_minify',),4=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),5=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.counter.php','function'=>'smarty_function_counter',),6=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.html_options.php','function'=>'smarty_function_html_options',),7=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_number_format.php','function'=>'smarty_function_sugar_number_format',),));
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
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=sgt_nhanvien'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
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
&module_name=sgt_nhanvien", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
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
<?php echo smarty_function_sugar_translate(array('label'=>'DEFAULT','module'=>'sgt_nhanvien'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="DEFAULT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
' size='30'
maxlength='60'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="ngaysinh">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NGAYSINH">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NGAYSINH','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="date" field="ngaysinh"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<span class="dateTime">
<?php $_smarty_tpl->_assignInScope('date_value', $_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['value']);?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['date_value']->value;?>
" title=''  tabindex='0'    size="11" maxlength="10" style="width:50%;" >
<button type="button" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['name'];?>
_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar" alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
"></span></button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['name'];?>
",
form : "EditView",
ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
button : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['ngaysinh']['name'];?>
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



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="sodienthoai">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SODIENTHOAI">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SODIENTHOAI','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="sodienthoai"  class="phone">
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['sodienthoai']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['sodienthoai']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['sodienthoai']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['sodienthoai']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['sodienthoai']['name'];?>
' size='30' maxlength='15' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="cccd">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CCCD">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CCCD','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="cccd"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['cccd']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['cccd']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['cccd']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['cccd']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['cccd']['name'];?>
' size='30'
maxlength='12'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="ma_nv">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MA_NV">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MA_NV','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="ma_nv"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['ma_nv']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ma_nv']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ma_nv']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['ma_nv']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['ma_nv']['name'];?>
' size='30'
maxlength='5'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="gioitinh">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_GIOITINH">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_GIOITINH','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="gioitinh"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['name'];?>
"
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['gioitinh']['name'];?>
"
title=''              
>
<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['gioitinh']['value']))) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['gioitinh']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['gioitinh']['value']),$_smarty_tpl);?>

<?php } else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['gioitinh']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['gioitinh']['default']),$_smarty_tpl);?>

<?php }?>
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="diachi">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DIACHI">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DIACHI','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="diachi"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['diachi']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['diachi']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['diachi']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['diachi']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['diachi']['name'];?>
' size='30'
maxlength='150'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="chucvu">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CHUCVU">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CHUCVU','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="chucvu"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['chucvu']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['chucvu']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['chucvu']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['chucvu']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['chucvu']['name'];?>
' size='30'
maxlength='40'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phongban">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHONGBAN">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHONGBAN','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="phongban"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phongban']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phongban']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phongban']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phongban']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phongban']['name'];?>
' size='30'
maxlength='50'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="baohiem">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BAOHIEM">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BAOHIEM','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="baohiem"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['baohiem']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['baohiem']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['baohiem']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['baohiem']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['baohiem']['name'];?>
' size='30'
maxlength='20'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="luongthoathuan">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LUONGTHOATHUAN">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LUONGTHOATHUAN','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="luongthoathuan"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['luongthoathuan']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['luongthoathuan']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['luongthoathuan']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['luongthoathuan']['name'];?>
' 
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['luongthoathuan']['name'];?>
' size='30' maxlength='26' value='<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="nganhang">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NGANHANG">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NGANHANG','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="nganhang"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['nganhang']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['nganhang']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['nganhang']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['nganhang']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['nganhang']['name'];?>
' size='30'
maxlength='50'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="phucap">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHUCAP">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHUCAP','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="currency" field="phucap"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phucap']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phucap']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phucap']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phucap']['name'];?>
' 
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phucap']['name'];?>
' size='30' maxlength='26' value='<?php echo smarty_function_sugar_number_format(array('var'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>
' title='' tabindex='0'
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="">
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="sotaikhoan">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SOTAIKHOAN">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SOTAIKHOAN','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="sotaikhoan"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['sotaikhoan']['name'];?>
' size='30'
maxlength='50'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="dienthoaikhancap">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_DIENTHOAIKHANCAP">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DIENTHOAIKHANCAP','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="dienthoaikhancap"  class="phone">
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['dienthoaikhancap']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['dienthoaikhancap']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['dienthoaikhancap']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['dienthoaikhancap']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['dienthoaikhancap']['name'];?>
' size='30' maxlength='20' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="hinhanh">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_HINHANH">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_HINHANH','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="image" field="hinhanh"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
    
        $( document ).ready(function() {
        $( "form#EditView" )
        .attr( "enctype", "multipart/form-data" )
        .attr( "encoding", "multipart/form-data" );
    });

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='include/SugarFields/Fields/Image/SugarFieldFile.js?v=cXbQ9fU9TiVVihQ2vusLlw'><?php echo '</script'; ?>
>
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['hinhanh']['value'])) {
$_smarty_tpl->_assignInScope('showRemove', true);
} else {
$_smarty_tpl->_assignInScope('showRemove', false);
}
$_smarty_tpl->_assignInScope('noChange', false);?>
<input type="hidden" name="deleteAttachment" value="0">
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['value'];?>
">
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
_record_id" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
_record_id" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<span id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
_old" style="display:<?php if (!$_smarty_tpl->tpl_vars['showRemove']->value) {?>none;<?php }?>">
<a href="index.php?entryPoint=download&id=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
&time=<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_modified']['value'];?>
" class="tabDetailViewDFLink"><?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['value'];?>
</a>
<?php if (!$_smarty_tpl->tpl_vars['noChange']->value) {?>
<input type='button' class='button' id='remove_button' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REMOVE'];?>
' onclick='SUGAR.field.file.deleteAttachment("<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
","",this);'>
<?php }?>
</span>
<?php if (!$_smarty_tpl->tpl_vars['noChange']->value) {?>
<span id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
_new" style="display:<?php if ($_smarty_tpl->tpl_vars['showRemove']->value) {?>none;<?php }?>">
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
_escaped">
<input id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
_file" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
_file"
type="file" title='' size="30"
maxlength='255'
>
<?php } else { ?>

<?php }
echo '<script'; ?>
 type="text/javascript">
$( "#<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
_file " ).change(function() {
        $("#<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
").val($("#<?php echo $_smarty_tpl->tpl_vars['fields']->value['hinhanh']['name'];?>
_file").val());
});
        <?php echo '</script'; ?>
>
</span>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="masothue">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_MASOTHUE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MASOTHUE','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="masothue"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['masothue']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['masothue']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['masothue']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['masothue']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['masothue']['name'];?>
' size='30'
maxlength='20'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="vitri">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_VITRI">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_VITRI','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="vitri"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['vitri']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['vitri']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['vitri']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['vitri']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['vitri']['name'];?>
' size='30'
maxlength='25'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="loaica">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_LOAICA">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LOAICA','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="loaica"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['name'];?>
"
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['loaica']['name'];?>
"
title=''              
>
<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['loaica']['value']))) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['loaica']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['loaica']['value']),$_smarty_tpl);?>

<?php } else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['loaica']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['loaica']['default']),$_smarty_tpl);?>

<?php }?>
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="sgt_nhanvien_sgt_doi_name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="sgt_nhanvien_sgt_doi_name"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['name'];?>
" class="sqsEnabled" tabindex="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['name'];?>
" size="" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['value'];?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['id_name'];?>
" 
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['id_name'];?>
" 
value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doisgt_doi_ida']['value'];?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['name'];?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_SELECT_BUTTON_TITLE"),$_smarty_tpl);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_SELECT_BUTTON_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
"<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['module'];?>
", 
600, 
400, 
"", 
true, 
false, 
{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"sgt_nhanvien_sgt_doisgt_doi_ida","name":"sgt_nhanvien_sgt_doi_name"}}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['name'];?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_RELATE_TITLE"),$_smarty_tpl);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['id_name'];?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_RELATE_LABEL"),$_smarty_tpl);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['sgt_nhanvien_sgt_doi_name']['name'];?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="bophan">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_BOPHAN">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BOPHAN','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="bophan"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['name'];?>
"
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['bophan']['name'];?>
"
title=''              
>
<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['bophan']['value']))) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['bophan']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['bophan']['value']),$_smarty_tpl);?>

<?php } else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['bophan']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['bophan']['default']),$_smarty_tpl);?>

<?php }?>
</select>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="ncc">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NCC">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NCC','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="ncc"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['name'];?>
" class="sqsEnabled" tabindex="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['name'];?>
" size="" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['value'];?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['id_name'];?>
" 
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['id_name'];?>
" 
value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc_id_c']['value'];?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['name'];?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE"),$_smarty_tpl);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
"<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['module'];?>
", 
600, 
400, 
"", 
true, 
false, 
{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"ncc_id_c","name":"ncc"}}, 
"single", 
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['name'];?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE"),$_smarty_tpl);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['id_name'];?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL"),$_smarty_tpl);?>
" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['ncc']['name'];?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>
</div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item" data-field="cc">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_CC">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CC','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="bool" field="cc"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['cc']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['cc']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['cc']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['cc']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['cc']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['cc']['name'];?>
" 
value="1" title='' tabindex="0" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'sgt_nhanvien'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (empty($_smarty_tpl->tpl_vars['fields']->value['description']['value'])) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['description']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['description']['value']);
}?>
<textarea  id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['description']['name'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['description']['name'];?>
'
    rows="6"
    cols="80"
    title='' tabindex="0" 
     ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>

</div>

<!-- [/hide] -->
</div>
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
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=sgt_nhanvien'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
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
&module_name=sgt_nhanvien", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
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
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Ngày tạo' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Ngày chỉnh sửa' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_NAME','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_ID','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_NAME','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'sodienthoai', 'phone', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SODIENTHOAI','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'diachi', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DIACHI','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'cccd', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CCCD','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'nganhang', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NGANHANG','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'sotaikhoan', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SOTAIKHOAN','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phongban', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PHONGBAN','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'chucvu', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CHUCVU','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'ngaysinh', 'date', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NGAYSINH','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'masothue', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MASOTHUE','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'baohiem', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BAOHIEM','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'dienthoaikhancap', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DIENTHOAIKHANCAP','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'bophan', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BOPHAN','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'luongthoathuan', 'currency', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LUONGTHOATHUAN','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phucap', 'currency', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PHUCAP','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'currency_id', 'currency_id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CURRENCY','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'hinhanh', 'image', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_HINHANH','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'ma_nv', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MA_NV','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'vitri', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_VITRI','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'cc', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CC','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'gioitinh', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_GIOITINH','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'tenchamcong', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TENCHAMCONG','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'loaica', 'enum', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LOAICA','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'ncc_id_c', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'ncc', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NCC','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'sgt_nhanvien_sgt_doi_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'ncc', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_NCC','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
', 'ncc_id_c' );
addToValidateBinaryDependency('EditView', 'sgt_nhanvien_sgt_doi_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_SGT_NHANVIEN_SGT_DOI_FROM_SGT_DOI_TITLE','module'=>'sgt_nhanvien','for_js'=>true),$_smarty_tpl);?>
', 'sgt_nhanvien_sgt_doisgt_doi_ida' );
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_sgt_nhanvien_sgt_doi_name']={"form":"EditView","method":"query","modules":["sgt_doi"],"group":"or","field_list":["name","id"],"populate_list":["sgt_nhanvien_sgt_doi_name","sgt_nhanvien_sgt_doisgt_doi_ida"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng tr\u00f9ng kh\u1edbp"};sqs_objects['EditView_ncc']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["ncc","ncc_id_c"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng tr\u00f9ng kh\u1edbp"};<?php echo '</script'; ?>
>
<?php }
}
