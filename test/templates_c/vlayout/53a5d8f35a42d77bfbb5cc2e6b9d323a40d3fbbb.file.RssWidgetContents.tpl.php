<?php /* Smarty version Smarty-3.1.7, created on 2015-12-31 15:53:08
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Rss/RssWidgetContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103211326856854f64eb8291-10754689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53a5d8f35a42d77bfbb5cc2e6b9d323a40d3fbbb' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Rss/RssWidgetContents.tpl',
      1 => 1399895722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103211326856854f64eb8291-10754689',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RSS_SOURCES' => 0,
    'recordsModel' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56854f64edd0b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56854f64edd0b')) {function content_56854f64edd0b($_smarty_tpl) {?>
<div class="recordNamesList"><div class="row-fluid"><div class="span10"><ul class="nav nav-list"><?php  $_smarty_tpl->tpl_vars['recordsModel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recordsModel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RSS_SOURCES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recordsModel']->key => $_smarty_tpl->tpl_vars['recordsModel']->value){
$_smarty_tpl->tpl_vars['recordsModel']->_loop = true;
?><li><a href="#" class="rssLink" data-id=<?php echo $_smarty_tpl->tpl_vars['recordsModel']->value->getId();?>
 data-url="<?php echo $_smarty_tpl->tpl_vars['recordsModel']->value->get('rssurl');?>
" title="<?php echo decode_html($_smarty_tpl->tpl_vars['recordsModel']->value->getName());?>
"><?php echo decode_html($_smarty_tpl->tpl_vars['recordsModel']->value->getName());?>
</a></li><?php }
if (!$_smarty_tpl->tpl_vars['recordsModel']->_loop) {
?><li style="text-align:center"><?php echo vtranslate('LBL_NO_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</li><?php } ?></ul></div></div></div><?php }} ?>