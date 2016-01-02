<?php /* Smarty version Smarty-3.1.7, created on 2015-12-31 15:53:52
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112363193956854f90cdb842-46975536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5e4486bba89d13843036c0a285a586e51c95eca' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1451572586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112363193956854f90cdb842-46975536',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56854f90ceb73',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56854f90ceb73')) {function content_56854f90ceb73($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>