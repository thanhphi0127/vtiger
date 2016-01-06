<?php /* Smarty version Smarty-3.1.7, created on 2016-01-04 10:34:00
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Google/ContactsSyncSettings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1875676444568a4a98828b53-75330979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '690a2f3ac2fbea14b79f93a7663bcce0a8a89013' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Google/ContactsSyncSettings.tpl',
      1 => 1451572687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1875676444568a4a98828b53-75330979',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULENAME' => 0,
    'SOURCE_MODULE' => 0,
    'GOOGLE_FIELDS' => 0,
    'GOOGLE_GROUPS' => 0,
    'ENTRY' => 0,
    'SELECTED_GROUP' => 0,
    'IS_GROUP_DELETED' => 0,
    'VTIGER_EMAIL_FIELDS' => 0,
    'VTIGER_PHONE_FIELDS' => 0,
    'VTIGER_URL_FIELDS' => 0,
    'VTIGER_OTHER_FIELDS' => 0,
    'SYNC_DIRECTION' => 0,
    'FLDNAME' => 0,
    'GOOGLE_TYPES' => 0,
    'TYPE' => 0,
    'FIELD_MAPPING' => 0,
    'CUSTOM_FIELD_MAPPING' => 0,
    'CUSTOM_FIELD_MAP' => 0,
    'EMAIL_FIELD_NAME' => 0,
    'VTIGER_FIELD_NAME' => 0,
    'EMAIL_FIELD_LABEL' => 0,
    'PHONE_FIELD_NAME' => 0,
    'PHONE_FIELD_LABEL' => 0,
    'OTHER_FIELD_NAME' => 0,
    'OTHER_FIELD_LABEL' => 0,
    'URL_FIELD_NAME' => 0,
    'URL_FIELD_LABEL' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_568a4a98c42fd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568a4a98c42fd')) {function content_568a4a98c42fd($_smarty_tpl) {?>
<div class="modelContainer" style="min-width: 800px;"><div class="modal-header contentsBackground"><button class="close" aria-hidden="true" data-dismiss="modal" type="button" title="<?php echo vtranslate('LBL_CLOSE');?>
">x</button><h3><?php echo vtranslate('SYNC_SETTINGS',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</h3></div><form class="form-horizontal" name="contactsyncsettings"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULENAME']->value;?>
" /><input type="hidden" name="action" value="SaveSettings" /><input type="hidden" name="sourcemodule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
" /><input id="user_field_mapping" type="hidden" name="fieldmapping" value="fieldmappings" /><input id="google_fields" type="hidden" value='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value);?>
' /><div class="modal-body"><div class="sync-settings"><div class="row-fluid"><div class="control-group"><label class="control-label"><?php echo vtranslate('LBL_SELECT_GOOGLE_GROUP_TO_SYNC',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
&nbsp;</label><div class="controls"><select class="select2 stretched" name="google_group" style="width:250px;"><option value="all"><?php echo vtranslate('LBL_ALL',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</option><?php $_smarty_tpl->tpl_vars['IS_GROUP_DELETED'] = new Smarty_variable(1, null, 0);?><?php  $_smarty_tpl->tpl_vars['ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ENTRY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GOOGLE_GROUPS']->value['entry']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ENTRY']->key => $_smarty_tpl->tpl_vars['ENTRY']->value){
$_smarty_tpl->tpl_vars['ENTRY']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ENTRY']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['ENTRY']->value['id']==$_smarty_tpl->tpl_vars['SELECTED_GROUP']->value){?> <?php $_smarty_tpl->tpl_vars['IS_GROUP_DELETED'] = new Smarty_variable(0, null, 0);?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['ENTRY']->value['title'];?>
</option><?php } ?><?php if ($_smarty_tpl->tpl_vars['IS_GROUP_DELETED']->value&&$_smarty_tpl->tpl_vars['SELECTED_GROUP']->value!='all'){?><?php if ($_smarty_tpl->tpl_vars['SELECTED_GROUP']->value!=''){?><option value="none" selected><?php echo vtranslate('LBL_NONE',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</option><?php }?><?php }?></select></div></div></div><div class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div><div class="btn-group pull-right"><button id="googlesync_addcustommapping" class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span>&nbsp;<?php echo vtranslate('LBL_ADD_CUSTOM_FIELD_MAPPING',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</button><ul class="dropdown-menu dropdown-menu-left" role="menu"><li class="addCustomFieldMapping" data-type="email" data-vtigerfields='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['VTIGER_EMAIL_FIELDS']->value);?>
'><a><?php echo vtranslate('LBL_EMAIL',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</a></li><li class="addCustomFieldMapping" data-type="phone" data-vtigerfields='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['VTIGER_PHONE_FIELDS']->value);?>
'><a><?php echo vtranslate('LBL_PHONE',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</a></li><li class="addCustomFieldMapping" data-type="url" data-vtigerfields='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['VTIGER_URL_FIELDS']->value);?>
'><a><?php echo vtranslate('LBL_URL',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</a></li><li class="divider"></li><li class="addCustomFieldMapping" data-type="custom" data-vtigerfields='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['VTIGER_OTHER_FIELDS']->value);?>
'><a><?php echo vtranslate('LBL_CUSTOM',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</a></li></ul></div><div class="row-fluid"><div class="control-group"><label class="control-label"><?php echo vtranslate('LBL_SELECT_SYNC_DIRECTION',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</label><div class="controls"><select class="select2 stretched" name="sync_direction" style="width:250px;"><option value="11" <?php if ($_smarty_tpl->tpl_vars['SYNC_DIRECTION']->value=='11'){?>selected<?php }?>><?php echo vtranslate('LBL_BI_DIRECTIONAL_SYNC',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</option><option value="10" <?php if ($_smarty_tpl->tpl_vars['SYNC_DIRECTION']->value=='10'){?>selected<?php }?>><?php echo vtranslate('LBL_ONLY_SYNC_FROM_GOOGLE_TO_VTIGER',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</option><option value="01" <?php if ($_smarty_tpl->tpl_vars['SYNC_DIRECTION']->value=='01'){?>selected<?php }?>><?php echo vtranslate('LBL_ONLY_SYNC_FROM_VTIGER_TO_GOOGLE',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</option></select></div></div></div></div><div id="googlesyncfieldmapping" style="margin:15px;"><table  class="table table-bordered"><thead><tr><td><b><?php echo vtranslate('APPTITLE',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</b></td><td><b><?php echo vtranslate('EXTENTIONNAME',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
</b></td></tr></thead><tbody><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("salutationtype", null, 0);?><td><?php echo vtranslate('Salutation',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
" /></td><td><?php echo vtranslate('Name Prefix',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
<input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['name'];?>
" /></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("firstname", null, 0);?><td><?php echo vtranslate('First Name',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
" /></td><td><?php echo vtranslate('First Name',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
<input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['name'];?>
" /></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("lastname", null, 0);?><td><?php echo vtranslate('Last Name',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
" /></td><td><?php echo vtranslate('Last Name',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
<input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['name'];?>
" /></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("title", null, 0);?><td><?php echo vtranslate('Title',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
" /></td><td><?php echo vtranslate('Job Title',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
<input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['name'];?>
" /></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("account_id", null, 0);?><td><?php echo vtranslate('Organization Name',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
" /></td><td><?php echo vtranslate('Company',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
<input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['organizationname']['name'];?>
" /></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("birthday", null, 0);?><td><?php echo vtranslate('Date of Birth',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
" /></td><td><?php echo vtranslate('Birthday',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
<input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['name'];?>
" /></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("email", null, 0);?><td><?php echo vtranslate('Email',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
" /></td><td><input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['email']['name'];?>
" /><?php $_smarty_tpl->tpl_vars["GOOGLE_TYPES"] = new Smarty_variable($_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['types'], null, 0);?><select class="select2 google-type" style="width:200px;" data-category="email"><?php  $_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GOOGLE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->key => $_smarty_tpl->tpl_vars['TYPE']->value){
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_tmp1]['google_field_type']==$_smarty_tpl->tpl_vars['TYPE']->value){?>selected<?php }?>><?php echo vtranslate('Email',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
 (<?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
)</option><?php } ?></select>&nbsp;&nbsp;<input type="text" class="google-custom-label" style="visibility:<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']!='custom'){?>hidden<?php }else{ ?>visible<?php }?>;width:190px;"value="<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']=='custom'){?><?php echo $_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_custom_label'];?>
<?php }?>"data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" /></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("secondaryemail", null, 0);?><td><?php echo vtranslate('Secondary Email',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
" /></td><td><input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['email']['name'];?>
" /><?php $_smarty_tpl->tpl_vars['GOOGLE_TYPES'] = new Smarty_variable($_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['email']['types'], null, 0);?><select class="select2 google-type" style="width:200px;" data-category="email"><?php  $_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GOOGLE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->key => $_smarty_tpl->tpl_vars['TYPE']->value){
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value['secondaryemail']['google_field_type']==$_smarty_tpl->tpl_vars['TYPE']->value){?>selected<?php }?>><?php echo vtranslate('Email',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
 (<?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
)</option><?php } ?></select>&nbsp;&nbsp;<input type="text" class="google-custom-label" style="visibility:<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']!='custom'){?>hidden<?php }else{ ?>visible<?php }?>;width:190px;"value="<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']=='custom'){?><?php echo $_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_custom_label'];?>
<?php }?>"data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("mobile", null, 0);?><td><?php echo vtranslate('Mobile Phone',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
" /></td><td><input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['phone']['name'];?>
" /><?php $_smarty_tpl->tpl_vars['GOOGLE_TYPES'] = new Smarty_variable($_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['phone']['types'], null, 0);?><select class="select2 stretched google-type" style="width:200px;" data-category="phone"><?php  $_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GOOGLE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->key => $_smarty_tpl->tpl_vars['TYPE']->value){
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']==$_smarty_tpl->tpl_vars['TYPE']->value){?>selected<?php }?>><?php echo vtranslate('Phone',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
 (<?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
)</option><?php } ?></select>&nbsp;&nbsp;<input type="text" class="google-custom-label" style="visibility:<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']!='custom'){?>hidden<?php }else{ ?>visible<?php }?>;width:190px;"value="<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']=='custom'){?><?php echo $_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_custom_label'];?>
<?php }?>"data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("phone", null, 0);?><td><?php echo vtranslate('Office Phone',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
" /></td><td><input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['phone']['name'];?>
" /><?php $_smarty_tpl->tpl_vars['GOOGLE_TYPES'] = new Smarty_variable($_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['phone']['types'], null, 0);?><select class="select2 stretched google-type" style="width:200px;" data-category="phone"><?php  $_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GOOGLE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->key => $_smarty_tpl->tpl_vars['TYPE']->value){
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']==$_smarty_tpl->tpl_vars['TYPE']->value){?>selected<?php }?>><?php echo vtranslate('Phone',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
 (<?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
)</option><?php } ?></select>&nbsp;&nbsp;<input type="text" class="google-custom-label" style="visibility:<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']!='custom'){?>hidden<?php }else{ ?>visible<?php }?>;width:190px;"value="<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']=='custom'){?><?php echo $_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_custom_label'];?>
<?php }?>"data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("homephone", null, 0);?><td><?php echo vtranslate('Home Phone',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
" /></td><td><input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['phone']['name'];?>
" /><?php $_smarty_tpl->tpl_vars['GOOGLE_TYPES'] = new Smarty_variable($_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['phone']['types'], null, 0);?><select class="select2 stretched google-type" style="width:200px;" data-category="phone"><?php  $_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GOOGLE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->key => $_smarty_tpl->tpl_vars['TYPE']->value){
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']==$_smarty_tpl->tpl_vars['TYPE']->value){?>selected<?php }?>><?php echo vtranslate('Phone',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
 (<?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
)</option><?php } ?></select>&nbsp;&nbsp;<input type="text" class="google-custom-label" style="visibility:<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']!='custom'){?>hidden<?php }else{ ?>visible<?php }?>;width:190px;"value="<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']=='custom'){?><?php echo $_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_custom_label'];?>
<?php }?>"data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("mailingaddress", null, 0);?><td><?php echo vtranslate('Mailing Address',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
"></td><td><input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['address']['name'];?>
" /><?php $_smarty_tpl->tpl_vars['GOOGLE_TYPES'] = new Smarty_variable($_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['address']['types'], null, 0);?><select class="select2 stretched google-type" style="width:200px;" data-category="address"><?php  $_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GOOGLE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->key => $_smarty_tpl->tpl_vars['TYPE']->value){
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']==$_smarty_tpl->tpl_vars['TYPE']->value){?>selected<?php }?>><?php echo vtranslate('Address',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
 (<?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
)</option><?php } ?></select>&nbsp;&nbsp;<input type="text" class="google-custom-label" style="visibility:<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']!='custom'){?>hidden<?php }else{ ?>visible<?php }?>;width:190px;"value="<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']=='custom'){?><?php echo $_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_custom_label'];?>
<?php }?>"data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("otheraddress", null, 0);?><td><?php echo vtranslate('Other Address',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
"></td><td><input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['address']['name'];?>
" /><?php $_smarty_tpl->tpl_vars['GOOGLE_TYPES'] = new Smarty_variable($_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['address']['types'], null, 0);?><select class="select2 stretched google-type" style="width:200px;" data-category="address"><?php  $_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GOOGLE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->key => $_smarty_tpl->tpl_vars['TYPE']->value){
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']==$_smarty_tpl->tpl_vars['TYPE']->value){?>selected<?php }?>><?php echo vtranslate('Address',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
 (<?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
)</option><?php } ?></select>&nbsp;&nbsp;<input type="text" class="google-custom-label" style="visibility:<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']!='custom'){?>hidden<?php }else{ ?>visible<?php }?>;width:190px;"value="<?php if ($_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_field_type']=='custom'){?><?php echo $_smarty_tpl->tpl_vars['FIELD_MAPPING']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['google_custom_label'];?>
<?php }?>"data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/></td></tr><tr><?php $_smarty_tpl->tpl_vars['FLDNAME'] = new Smarty_variable("description", null, 0);?><td><?php echo vtranslate('Description',$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
<input type="hidden" class="vtiger_field_name" value="<?php echo $_smarty_tpl->tpl_vars['FLDNAME']->value;?>
"></td><td><?php echo vtranslate('Note',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
<input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value[$_smarty_tpl->tpl_vars['FLDNAME']->value]['name'];?>
" /></td></tr><?php  $_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->_loop = false;
 $_smarty_tpl->tpl_vars['VTIGER_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAPPING']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->key => $_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value){
$_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->_loop = true;
 $_smarty_tpl->tpl_vars['VTIGER_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->key;
?><tr><td><?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_name']=='gd:email'){?><select class="select2 stretched vtiger_field_name" style="width:200px;" data-category="email"><?php  $_smarty_tpl->tpl_vars['EMAIL_FIELD_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EMAIL_FIELD_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['EMAIL_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VTIGER_EMAIL_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EMAIL_FIELD_LABEL']->key => $_smarty_tpl->tpl_vars['EMAIL_FIELD_LABEL']->value){
$_smarty_tpl->tpl_vars['EMAIL_FIELD_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['EMAIL_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['EMAIL_FIELD_LABEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['EMAIL_FIELD_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['VTIGER_FIELD_NAME']->value==$_smarty_tpl->tpl_vars['EMAIL_FIELD_NAME']->value){?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['EMAIL_FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php } ?></select><?php }elseif($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_name']=='gd:phoneNumber'){?><select class="select2 stretched vtiger_field_name" style="width:200px;" data-category="phone"><?php  $_smarty_tpl->tpl_vars['PHONE_FIELD_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PHONE_FIELD_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['PHONE_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VTIGER_PHONE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PHONE_FIELD_LABEL']->key => $_smarty_tpl->tpl_vars['PHONE_FIELD_LABEL']->value){
$_smarty_tpl->tpl_vars['PHONE_FIELD_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['PHONE_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['PHONE_FIELD_LABEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['PHONE_FIELD_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['VTIGER_FIELD_NAME']->value==$_smarty_tpl->tpl_vars['PHONE_FIELD_NAME']->value){?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['PHONE_FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php } ?></select><?php }elseif($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_name']=='gContact:userDefinedField'){?><select class="select2 stretched vtiger_field_name" style="width:200px;" data-category="custom"><?php  $_smarty_tpl->tpl_vars['OTHER_FIELD_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['OTHER_FIELD_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['OTHER_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VTIGER_OTHER_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['OTHER_FIELD_LABEL']->key => $_smarty_tpl->tpl_vars['OTHER_FIELD_LABEL']->value){
$_smarty_tpl->tpl_vars['OTHER_FIELD_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['OTHER_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['OTHER_FIELD_LABEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['OTHER_FIELD_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['VTIGER_FIELD_NAME']->value==$_smarty_tpl->tpl_vars['OTHER_FIELD_NAME']->value){?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['OTHER_FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php } ?></select><?php }elseif($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_name']=='gContact:website'){?><select class="select2 stretched vtiger_field_name" style="width:200px;" data-category="url"><?php  $_smarty_tpl->tpl_vars['URL_FIELD_LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['URL_FIELD_LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['URL_FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['VTIGER_URL_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['URL_FIELD_LABEL']->key => $_smarty_tpl->tpl_vars['URL_FIELD_LABEL']->value){
$_smarty_tpl->tpl_vars['URL_FIELD_LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['URL_FIELD_NAME']->value = $_smarty_tpl->tpl_vars['URL_FIELD_LABEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['URL_FIELD_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['VTIGER_FIELD_NAME']->value==$_smarty_tpl->tpl_vars['URL_FIELD_NAME']->value){?>selected<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['URL_FIELD_LABEL']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php } ?></select><?php }?></td><td><input type="hidden" class="google_field_name" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_name'];?>
" /><?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_name']=='gd:email'){?><?php $_smarty_tpl->tpl_vars['GOOGLE_TYPES'] = new Smarty_variable($_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['email']['types'], null, 0);?><select class="select2 google-type" style="width:200px;" data-category="email"><?php  $_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GOOGLE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->key => $_smarty_tpl->tpl_vars['TYPE']->value){
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_type']==$_smarty_tpl->tpl_vars['TYPE']->value){?>selected<?php }?>><?php echo vtranslate('Email',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
 (<?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
)</option><?php } ?></select>&nbsp;&nbsp;<input type="text" class="google-custom-label" style="visibility:<?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_type']!='custom'){?>hidden<?php }else{ ?>visible<?php }?>;width:190px;"value="<?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_type']=='custom'){?><?php echo $_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_custom_label'];?>
<?php }?>" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/><?php }elseif($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_name']=='gd:phoneNumber'){?><?php $_smarty_tpl->tpl_vars['GOOGLE_TYPES'] = new Smarty_variable($_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['phone']['types'], null, 0);?><select class="select2 google-type" style="width:200px;" data-category="phone"><?php  $_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GOOGLE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->key => $_smarty_tpl->tpl_vars['TYPE']->value){
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_type']==$_smarty_tpl->tpl_vars['TYPE']->value){?>selected<?php }?>><?php echo vtranslate('Phone',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
 (<?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
)</option><?php } ?></select>&nbsp;&nbsp;<input type="text" class="google-custom-label" style="visibility:<?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_type']!='custom'){?>hidden<?php }else{ ?>visible<?php }?>;width:190px;"value="<?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_type']=='custom'){?><?php echo $_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_custom_label'];?>
<?php }?>" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/><?php }elseif($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_name']=='gContact:userDefinedField'){?><input type="hidden" class="google-type" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_type'];?>
"><input type="text" class="google-custom-label" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_custom_label'];?>
" style="width:190px;" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/><?php }elseif($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_name']=='gContact:website'){?><?php $_smarty_tpl->tpl_vars['GOOGLE_TYPES'] = new Smarty_variable($_smarty_tpl->tpl_vars['GOOGLE_FIELDS']->value['url']['types'], null, 0);?><select class="select2 google-type" style="width:200px;" data-category="url"><?php  $_smarty_tpl->tpl_vars['TYPE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TYPE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GOOGLE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TYPE']->key => $_smarty_tpl->tpl_vars['TYPE']->value){
$_smarty_tpl->tpl_vars['TYPE']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_type']==$_smarty_tpl->tpl_vars['TYPE']->value){?>selected<?php }?>><?php echo vtranslate('URL',$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
 (<?php echo vtranslate($_smarty_tpl->tpl_vars['TYPE']->value,$_smarty_tpl->tpl_vars['MODULENAME']->value);?>
)</option><?php } ?></select>&nbsp;&nbsp;<input type="text" class="google-custom-label" style="visibility:<?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_type']!='custom'){?>hidden<?php }else{ ?>visible<?php }?>;width:190px;"value="<?php if ($_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_field_type']=='custom'){?><?php echo $_smarty_tpl->tpl_vars['CUSTOM_FIELD_MAP']->value['google_custom_label'];?>
<?php }?>" data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"/><?php }?><a class="deleteCustomMapping pull-right"><i title="Delete" class="icon-trash"></i></a></td></tr><?php } ?></tbody></table><br><br><br></div></div></form><div class="modal-footer"><div class="pull-right cancelLinkContainer" style="margin-top:0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div><button id="save_syncsetting" class="btn btn-success"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div><?php }} ?>