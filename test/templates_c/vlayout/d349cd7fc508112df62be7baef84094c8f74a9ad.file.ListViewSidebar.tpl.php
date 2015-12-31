<?php /* Smarty version Smarty-3.1.7, created on 2015-12-31 14:44:55
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/ListViewSidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:141989623856853f672ae462-55324519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd349cd7fc508112df62be7baef84094c8f74a9ad' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/ListViewSidebar.tpl',
      1 => 1373768345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141989623856853f672ae462-55324519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56853f672d242',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56853f672d242')) {function content_56853f672d242($_smarty_tpl) {?>
<div class="row-fluid"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SideBar.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><?php }} ?>