<?php /* Smarty version Smarty-3.1.7, created on 2015-12-31 15:18:35
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17863547085685474ba70c39-89233270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50309fda7b4ab1f5a82cfd393904937a9d46c1bc' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Events.tpl',
      1 => 1451575104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17863547085685474ba70c39-89233270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5685474ba9bda',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5685474ba9bda')) {function content_5685474ba9bda($_smarty_tpl) {?><table id="md-events-table">
<tr>
<td>
<div id="md-events-toolbar">
	<h2><?php echo vtranslate('LBL_EVENTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>
	
	<ul id="md-events-list">
	<li><?php echo vtranslate('vtiger.entity.beforesave.modifiable',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.beforesave',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.beforesave.final',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.aftersave',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.aftersave.final',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.beforedelete',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.afterdelete',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	<li><?php echo vtranslate('vtiger.entity.afterrestore',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li>
	</ul>
</div>
</td>
<td>
<div>
<ul id="md-events-ul" class="md-events-ul">
<!-- Events added with JS -->
</ul>
</div>
</td>
</table><?php }} ?>