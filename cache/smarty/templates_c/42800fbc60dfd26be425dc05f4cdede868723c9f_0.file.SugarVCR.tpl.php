<?php
/* Smarty version 4.3.1, created on 2024-09-04 14:21:08
  from '/var/www/html/asungvina/custom/themes/SuiteP/include/EditView/SugarVCR.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d80a641786b9_73518426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42800fbc60dfd26be425dc05f4cdede868723c9f' => 
    array (
      0 => '/var/www/html/asungvina/custom/themes/SuiteP/include/EditView/SugarVCR.tpl',
      1 => 1706717332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d80a641786b9_73518426 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td nowrap class="paginationWrapper">
            <?php echo '<script'; ?>
>
                SUGAR.saveAndContinue = function (elem)
                    {
                        elem.form.action.value='Save';
                        if(check_form('EditView'))
                        {
                            sendAndRedirect('EditView', '<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVING'];?>
 <?php echo $_smarty_tpl->tpl_vars['module']->value;?>
...', '<?php echo $_smarty_tpl->tpl_vars['list_link']->value;?>
');
                        }
                    }
            <?php echo '</script'; ?>
>
            <?php if (empty($_smarty_tpl->tpl_vars['list_link']->value)) {?>
                                
                    <?php echo '<script'; ?>
>
                        $(document).ready(function () {
                          $('#save_and_continue').remove();
                        })
                    <?php echo '</script'; ?>
>
                
            <?php }?>
            <span class="pagination">
                <?php if (!empty($_smarty_tpl->tpl_vars['previous_link']->value)) {?>
                <a class="button btn-pagination" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['previous_link']->value;?>
">
                                        <span class="suitepicon suitepicon-action-left"> </span><span class="pagination-label"><?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS'];?>
</span>
                </a>
                <?php } else { ?>
                <a class="button btn-pagination" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS'];?>
" disabled='true'>
                                        <span class="suitepicon suitepicon-action-left"> </span><span class="pagination-label"><?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS'];?>
</span>
                </a>
                <?php }?>
                &nbsp;&nbsp;
                <span class="pagination-range-label">(<?php echo $_smarty_tpl->tpl_vars['offset']->value;
if (!empty($_smarty_tpl->tpl_vars['total']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_LIST_OF'];?>
 <?php echo $_smarty_tpl->tpl_vars['total']->value;
echo $_smarty_tpl->tpl_vars['plus']->value;
}?>)</span>
                &nbsp;&nbsp;
                <?php if (!empty($_smarty_tpl->tpl_vars['next_link']->value)) {?>
                <a class="button btn-pagination" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['next_link']->value;?>
">
                                        <span class="pagination-label"><?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT'];?>
</span><span class="suitepicon suitepicon-action-right"> </span>
                </a>
                <?php } else { ?>
                <a class="button btn-pagination" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT'];?>
" disabled="true">
                                        <span class="pagination-label"><?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT'];?>
</span><span class="suitepicon suitepicon-action-right"> </span>
                </a>
                <?php }?>
            </span>
            &nbsp;&nbsp;
        </td>
    </tr>
</table>
<?php }
}
