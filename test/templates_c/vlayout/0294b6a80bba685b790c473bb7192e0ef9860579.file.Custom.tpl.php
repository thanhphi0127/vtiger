<?php /* Smarty version Smarty-3.1.7, created on 2015-12-31 15:18:35
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Custom.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1433855225685474bab67a3-01008429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0294b6a80bba685b790c473bb7192e0ef9860579' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Custom.tpl',
      1 => 1451575104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1433855225685474bab67a3-01008429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5685474bad202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5685474bad202')) {function content_5685474bad202($_smarty_tpl) {?><script type="text/javascript" src="modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/js/CustomScript.js"></script>

<h2><?php echo vtranslate('LBL_CUSTOM_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h2>

<table>
<tr>
<td colspan="2">
<?php echo vtranslate('LBL_CUSTOM_VALUES_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

</td>
</tr>
<tr>
<td><?php echo vtranslate('LBL_MY_VARIABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</td>
<td>
<select name="myVariable">
<option value="value1"><?php echo vtranslate('LBL_MY_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 1</option>
<option value="value2"><?php echo vtranslate('LBL_MY_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 2</option>
</select>
</td>
</tr>
</table><?php }} ?>