<?php /* Smarty version Smarty-3.1.7, created on 2015-12-31 14:43:30
         compiled from "/var/www/html/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/AdvanceSearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27359361156853f12f3cec5-61426987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2610bc82e73508aa9f6881c2051138e3f813cf3' => 
    array (
      0 => '/var/www/html/vtigercrm/includes/runtime/../../layouts/vlayout/modules/Vtiger/AdvanceSearch.tpl',
      1 => 1398442051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27359361156853f12f3cec5-61426987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'SEARCHABLE_MODULES' => 0,
    'MODULE_NAME' => 0,
    'SOURCE_MODULE' => 0,
    'SOURCE_MODULE_MODEL' => 0,
    'SAVE_FILTER_PERMITTED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56853f1306cbe',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56853f1306cbe')) {function content_56853f1306cbe($_smarty_tpl) {?>
<div id="advanceSearchContainer"><div class="row-fluid padding10 boxSizingBorderBox"><div class="span5"><strong class="pull-right pushDown"><?php echo vtranslate('LBL_SEARCH_IN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></div><div class="span7 "><select class="chzn-select pushDown" id="searchModuleList" data-placeholder="<?php echo vtranslate('LBL_SELECT_MODULE');?>
"><option></option><?php  $_smarty_tpl->tpl_vars['fieldObject'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fieldObject']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SEARCHABLE_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fieldObject']->key => $_smarty_tpl->tpl_vars['fieldObject']->value){
$_smarty_tpl->tpl_vars['fieldObject']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULE_NAME']->value = $_smarty_tpl->tpl_vars['fieldObject']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value==$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value){?>selected="selected"<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php } ?></select></div></div><div class="row-fluid"><div class="filterElements" id="searchContainer" style="height: auto;"><form name="advanceFilterForm"><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value=='Home'){?><div class="textAlignCenter well contentsBackground"><?php echo vtranslate('LBL_PLEASE_SELECT_MODULE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><?php }else{ ?><input type="hidden" name="labelFields" data-value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SOURCE_MODULE_MODEL']->value->getNameFields());?>
' /><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('AdvanceFilter.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }?></form></div></div><div class="actions modal-footer"><a class="cancelLink pull-right" type="reset" id="advanceSearchCancel" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a><button class="btn" id="advanceSearchButton" <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value=='Home'){?> disabled="" <?php }?>  type="submit"><strong><?php echo vtranslate('LBL_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><div class="pull-right"><?php if ($_smarty_tpl->tpl_vars['SAVE_FILTER_PERMITTED']->value){?><button class="btn hide pull-right" <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value=='Home'){?> disabled="" <?php }?> id="advanceSave"><strong><?php echo vtranslate('LBL_SAVE_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn pull-right" <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value=='Home'){?> disabled="" <?php }?> id="advanceIntiateSave"><strong><?php echo vtranslate('LBL_SAVE_AS_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><input class="zeroOpacity pull-right" type="text" value="" name="viewname"/>&nbsp;<?php }?></div></div></div></div></div><?php }} ?>