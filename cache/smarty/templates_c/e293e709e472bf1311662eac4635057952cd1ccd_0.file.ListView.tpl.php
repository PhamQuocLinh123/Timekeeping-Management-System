<?php
/* Smarty version 4.3.1, created on 2024-09-04 14:30:20
  from '/var/www/html/asungvina/include/SugarFields/Fields/Phone/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d80c8c273798_39486359',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e293e709e472bf1311662eac4635057952cd1ccd' => 
    array (
      0 => '/var/www/html/asungvina/include/SugarFields/Fields/Phone/ListView.tpl',
      1 => 1706717332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d80c8c273798_39486359 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),1=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_phone.php','function'=>'smarty_function_sugar_phone',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'getPhone', 'phone', null);
echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone']->value,'usa_format'=>$_smarty_tpl->tpl_vars['usa_format']->value),$_smarty_tpl);
}
}
