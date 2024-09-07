<?php
/* Smarty version 4.3.1, created on 2024-09-05 08:35:15
  from '/var/www/html/asungvina/include/SugarFields/Fields/Link/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d90ad3130ef7_94253795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e455ebc2ad7a89fe91e708c3c1fc283b2ef9895' => 
    array (
      0 => '/var/www/html/asungvina/include/SugarFields/Fields/Link/ListView.tpl',
      1 => 1706717332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d90ad3130ef7_94253795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),1=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/function.sugar_replace_vars.php','function'=>'smarty_function_sugar_replace_vars',),2=>array('file'=>'/var/www/html/asungvina/include/Smarty/plugins/modifier.to_url.php','function'=>'smarty_modifier_to_url',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'getLink', 'link', null);
echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['vardef']->value['gen'] && $_smarty_tpl->tpl_vars['vardef']->value['default'] && $_smarty_tpl->tpl_vars['link']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'getDefault', 'default', null);
if (is_string($_smarty_tpl->tpl_vars['vardef']->value['default'])) {
echo $_smarty_tpl->tpl_vars['vardef']->value['default'];
} else {
echo $_smarty_tpl->tpl_vars['link']->value;
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php echo smarty_function_sugar_replace_vars(array('subject'=>$_smarty_tpl->tpl_vars['default']->value,'use_curly'=>true,'assign'=>'link','fields'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value),$_smarty_tpl);?>

<?php }?>

<a href="<?php echo smarty_modifier_to_url($_smarty_tpl->tpl_vars['link']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['displayParams']->value['link_target']) {?>target='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['link_target'];?>
'<?php } elseif ($_smarty_tpl->tpl_vars['vardef']->value['link_target']) {?>target='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['link_target'];?>
'<?php }?>><?php echo $_smarty_tpl->tpl_vars['link']->value;?>
</a>
<?php }
}
