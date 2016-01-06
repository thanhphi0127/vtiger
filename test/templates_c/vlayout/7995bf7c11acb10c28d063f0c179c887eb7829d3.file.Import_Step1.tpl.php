<?php /* Smarty version Smarty-3.1.7, created on 2016-01-03 05:12:20
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Import/Import_Step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20012255905688adb43c3279-70429916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7995bf7c11acb10c28d063f0c179c887eb7829d3' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Import/Import_Step1.tpl',
      1 => 1451572583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20012255905688adb43c3279-70429916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'IMPORT_UPLOAD_SIZE' => 0,
    'IMPORT_UPLOAD_SIZE_MB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5688adb43d141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5688adb43d141')) {function content_5688adb43d141($_smarty_tpl) {?>
<table width="100%" cellspacing="0" cellpadding="2">
	<tr>
		<td><strong><?php echo vtranslate('LBL_IMPORT_STEP_1',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong></td>
		<td class="big"><?php echo vtranslate('LBL_IMPORT_STEP_1_DESCRIPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td data-import-upload-size="<?php echo $_smarty_tpl->tpl_vars['IMPORT_UPLOAD_SIZE']->value;?>
" data-import-upload-size-mb="<?php echo $_smarty_tpl->tpl_vars['IMPORT_UPLOAD_SIZE_MB']->value;?>
">
			<input type="hidden" name="type" value="csv" />
			<input type="hidden" name="is_scheduled" value="1" />
			<input type="file" name="import_file" id="import_file" onchange="ImportJs.checkFileType()"/>
			<!-- input type="hidden" name="userfile_hidden" value=""/ -->
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><?php echo vtranslate('LBL_IMPORT_SUPPORTED_FILE_TYPES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td>
	</tr>
</table><?php }} ?>