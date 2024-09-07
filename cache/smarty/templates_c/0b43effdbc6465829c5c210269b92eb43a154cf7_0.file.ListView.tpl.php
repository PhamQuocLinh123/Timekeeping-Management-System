<?php
/* Smarty version 4.3.1, created on 2024-09-04 14:28:58
  from '/var/www/html/asungvina/include/SugarFields/Fields/Base/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d80c3ad868c0_81770475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b43effdbc6465829c5c210269b92eb43a154cf7' => 
    array (
      0 => '/var/www/html/asungvina/include/SugarFields/Fields/Base/ListView.tpl',
      1 => 1706717332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d80c3ad868c0_81770475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
