<?php /* Smarty version Smarty-3.1.7, created on 2015-12-31 15:54:39
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/RecycleBin/ListViewHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163210878856854fbf068ec2-77924113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1180799090a4085b44bf9e55a337a425acdc4393' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/RecycleBin/ListViewHeader.tpl',
      1 => 1451572689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163210878856854fbf068ec2-77924113',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTVIEW_MASSACTIONS' => 0,
    'MODULE' => 0,
    'LISTVIEW_MASSACTION' => 0,
    'LISTVIEW_LINKS' => 0,
    'LISTVIEW_BASICACTION' => 0,
    'DELETED_RECORDS_TOTAL_COUNT' => 0,
    'MODULE_LIST' => 0,
    'SOURCE_MODULE' => 0,
    'MODULEMODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56854fbf122d9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56854fbf122d9')) {function content_56854fbf122d9($_smarty_tpl) {?>
<div class="listViewPageDiv"><div class="listViewTopMenuDiv"><div class="listViewActionsDiv row-fluid"><span class="btn-toolbar span4"><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS']->value){?><span class="btn-group listViewMassActions"><button class="btn dropdown-toggle" data-toggle="dropdown"><strong><?php echo vtranslate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong>&nbsp;&nbsp;<i class="caret"></i></button><ul class="dropdown-menu"><?php  $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->key => $_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->value){
$_smarty_tpl->tpl_vars["LISTVIEW_MASSACTION"]->_loop = true;
?><li id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_massAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getLabel());?>
"><a href="javascript:void(0);" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getUrl(),'javascript:')===0){?>onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?> onclick="Vtiger_List_Js.triggerMassAction('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getUrl();?>
')"<?php }?> ><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTION']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></li><?php } ?></ul></span><?php }?><?php  $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->key => $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->_loop = true;
?><span class="btn-group"><button id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_basicAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getLabel());?>
" class="btn clearRecycleBin" <?php if (stripos($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),'javascript:')===0){?> onclick='<?php echo substr($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl(),strlen("javascript:"));?>
;'<?php }else{ ?> onclick='window.location.href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getUrl();?>
"'<?php }?> <?php if ($_smarty_tpl->tpl_vars['DELETED_RECORDS_TOTAL_COUNT']->value==0){?> disabled="disabled" <?php }?>>&nbsp;<strong><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_BASICACTION']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></span><?php } ?></span><span class="btn-toolbar span4"><span class="customFilterMainSpan btn-group"><?php if (count($_smarty_tpl->tpl_vars['MODULE_LIST']->value)>0){?><select id="customFilter" style="width:350px;"><?php  $_smarty_tpl->tpl_vars['MODULEMODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULEMODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULEMODEL']->key => $_smarty_tpl->tpl_vars['MODULEMODEL']->value){
$_smarty_tpl->tpl_vars['MODULEMODEL']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value==$_smarty_tpl->tpl_vars['MODULEMODEL']->value->get('name')){?><option  value="<?php echo $_smarty_tpl->tpl_vars['MODULEMODEL']->value->get('name');?>
" selected=""><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULEMODEL']->value->get('name'),$_smarty_tpl->tpl_vars['MODULEMODEL']->value->get('name'));?>
</option><?php }elseif($_smarty_tpl->tpl_vars['MODULEMODEL']->value->get('name')!='Events'){?><option  value="<?php echo $_smarty_tpl->tpl_vars['MODULEMODEL']->value->get('name');?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULEMODEL']->value->get('name'),$_smarty_tpl->tpl_vars['MODULEMODEL']->value->get('name'));?>
</option><?php }?><?php } ?></select><?php }?></span></span><span class="span4 btn-toolbar"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</span></div></div><div class="listViewContentDiv" id="listViewContents"><?php }} ?>