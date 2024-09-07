<?php
/* Smarty version 4.3.1, created on 2024-09-04 14:28:58
  from '/var/www/html/asungvina/include/SugarFields/Fields/Bool/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d80c3ad8d6e7_40569933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a55129d1b5373461bad6be9ce78a5099051e815f' => 
    array (
      0 => '/var/www/html/asungvina/include/SugarFields/Fields/Bool/ListView.tpl',
      1 => 1706717332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d80c3ad8d6e7_40569933 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php if (strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "1" || strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "yes" || strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "on") {
$_smarty_tpl->_assignInScope('checked', 'checked="checked"');
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
<?php }
}
