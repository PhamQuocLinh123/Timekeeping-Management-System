<?php
/* Smarty version 4.3.1, created on 2024-09-05 08:34:58
  from '/var/www/html/asungvina/include/utils/recaptcha_disabled.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66d90ac24009b1_06184685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '762e1da965882e7e0fc10ee59d1e9ec931603379' => 
    array (
      0 => '/var/www/html/asungvina/include/utils/recaptcha_disabled.tpl',
      1 => 1706717332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66d90ac24009b1_06184685 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

  /**
   * Login Screen Validation
   */
  function validateAndSubmit() {
      generatepwd();
    }

  /**
   * Password reset screen validation
   */
  function validateCaptchaAndSubmit() {
      document.getElementById('username_password').value = document.getElementById('new_password').value;
      document.getElementById('ChangePasswordForm').submit();
    }
<?php echo '</script'; ?>
>
<?php }
}
