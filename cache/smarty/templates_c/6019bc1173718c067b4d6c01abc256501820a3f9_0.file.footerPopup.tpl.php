<?php
/* Smarty version 4.3.1, created on 2024-09-04 14:28:58
  from '/var/www/html/asungvina/include/SearchForm/tpls/footerPopup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d80c3ad07e28_29340863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6019bc1173718c067b4d6c01abc256501820a3f9' => 
    array (
      0 => '/var/www/html/asungvina/include/SearchForm/tpls/footerPopup.tpl',
      1 => 1706717332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d80c3ad07e28_29340863 (Smarty_Internal_Template $_smarty_tpl) {
?></div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php echo '<script'; ?>
>

    var listViewSearchIcon = {

        searchInfo: <?php echo $_smarty_tpl->tpl_vars['searchInfoJson']->value;?>
,

        selectedSavedSearch: '<?php echo $_smarty_tpl->tpl_vars['savedSearchData']->value['selected'];?>
',

        infoInit: function () {

            $(function () {
                // load qtip
                if (typeof $.qtip == 'undefined') {
                    $.getScript('include/javascript/qtip/jquery.qtip.min.js');
                    $("<link/>", {
                        rel: "stylesheet",
                        type: "text/css",
                        href: "include/javascript/qtip/jquery.qtip.min.css"
                    }).appendTo("head");
                }

                // add qtip to search filter icon
                var qtipLoadInterval = setInterval(function () {
                    if (typeof $.qtip != 'undefined') {
                        clearInterval(qtipLoadInterval);

                        var qtipNeeded = false;
                        var qtipContent = '<table>';
                        for (var key in listViewSearchIcon.searchInfo) {
                            qtipContent += '<tr>';
                            qtipContent += '<td><b>' + key + '</b>&nbsp;</td>';
                            qtipContent += '<td>' + listViewSearchIcon.searchInfo[key] + '</td>';
                            qtipContent += '</tr>';
                            qtipNeeded = true;
                        }
                        qtipContent += '</table>';

                        if (qtipNeeded) {
                            $('.searchAppliedAlertLink').qtip({
                                content: qtipContent
                            });
                            $('.searchAppliedAlertLink').removeClass('hidden');
                        }
                    }
                }, 100);

                var switchSearchTabLatestActiveInterval = setInterval(function () {
                    listViewSearchIcon.switchSearchTabLatestActive();
                }, 100);

            });

        },

        onOpen: function () {
        },

        // private
        latestSearchDialogType: '<?php echo $_smarty_tpl->tpl_vars['viewTab']->value;?>
',

        // private
        setLatestSearchDialogType: function (dialogType) {
            $('input[name="selectedSearchTab"]').val(dialogType);
            this.latestSearchDialogType = dialogType;
        },

        // public
        getLatestSearchDialogType: function () {
            return this.latestSearchDialogType;
        },

        toggleSearchDialog: function (dialogType) {
            if (dialogType == 'latest') {
                if (this.selectedSavedSearch != '') {
                    dialogType = 'advanced';
                }
                else {
                    dialogType = this.getLatestSearchDialogType();
                }
            }
            this.setLatestSearchDialogType(dialogType);
            SUGAR.searchForm.searchFormSelect('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|' + dialogType + '_search', '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|' + (dialogType == 'advanced' ? 'basic' : 'advanced') + '_search');
        },

        switchSearchTabLatestActive: function () {
            $('.searchTabHandler').removeClass('active');
            $('.searchTabHandler.' + this.getLatestSearchDialogType()).addClass('active');

            $('.searchTabHeader').removeClass('active');
            $('.searchTabHeader.' + this.getLatestSearchDialogType()).addClass('active');
        }

    };

    listViewSearchIcon.infoInit();


<?php echo '</script'; ?>
>

<?php }
}
