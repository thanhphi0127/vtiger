<?php /* Smarty version Smarty-3.1.7, created on 2016-01-03 05:12:20
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Import/Import_Basic_Buttons.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9203745315688adb44515d3-34458873%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da8f86e8e554902b37d36b3a9ca713cf54139419' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Import/Import_Basic_Buttons.tpl',
      1 => 1451572583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9203745315688adb44515d3-34458873',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'FOR_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5688adb445db0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5688adb445db0')) {function content_5688adb445db0($_smarty_tpl) {?>

<button type="submit" name="next"  class="btn btn-success"
		onclick="return ImportJs.uploadAndParse();"><strong><?php echo vtranslate('LBL_NEXT_BUTTON_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button>
&nbsp;&nbsp;
<a name="cancel" class="cursorPointer cancelLink" value="<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" onclick="location.href='index.php?module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=List'">
		<?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>

</a><?php }} ?>