<?php /* Smarty version Smarty-3.1.7, created on 2015-12-31 15:18:35
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18984433945685474b89f659-03043243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7daed2408eedd75e338b8d3c2eafdece14f9b5b' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/Settings/ModuleDesigner/Index.tpl',
      1 => 1451575104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18984433945685474b89f659-03043243',
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
  'unifunc' => 'content_5685474b96111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5685474b96111')) {function content_5685474b96111($_smarty_tpl) {?><div class="row-fluid settingsHeader" style="padding: 10px;">
<a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=Index&parent=Settings"><?php echo vtranslate('LBL_MODULEDESIGNER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>
<hr/>
</div>


<div id="md-container">
	<div id="md-header">
		<div id="md-tab-general" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/config.png" alt="<?php echo vtranslate('LBL_GENERAL_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_GENERAL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-blocks-fields" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/field.png" alt="<?php echo vtranslate('LBL_BLOCKS_FIELDS_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_BLOCKS_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-custom-links" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/link.png" alt="<?php echo vtranslate('LBL_CUSTOM_LINKS_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_CUSTOM_LINKS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-related-lists" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/related.png" alt="<?php echo vtranslate('LBL_RELATED_LISTS_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_RELATED_LISTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-events" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/event.png" alt="<?php echo vtranslate('LBL_EVENTS_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_EVENTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-filters" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/filter.png" alt="<?php echo vtranslate('LBL_FILTERS_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_FILTERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-custom" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/custom.png" alt="<?php echo vtranslate('LBL_CUSTOM_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_CUSTOM',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
		<div id="md-tab-export" class="md-tab"><img src="layouts/vlayout/modules/Settings/<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
/assets/images/export.png" alt="<?php echo vtranslate('LBL_EXPORT_ALT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" /> <?php echo vtranslate('LBL_EXPORT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div>
	</div><!-- md-header -->	
	
	<div id="md-body">
			<div id="md-trash" class="md-trash"></div>
	
			<div id="md-page-general" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/General.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-general -->
			
			<div id="md-page-blocks-fields" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/BlocksFields.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-blocks-fields -->
			
			<div id="md-page-custom-links" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/CustomLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-custom-links -->
			
			<div id="md-page-related-lists" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/RelatedLists.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-related-list -->
			
			<div id="md-page-events" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/Events.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-events -->
			
			<div id="md-page-filters" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/Filters.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-filters -->
			
			<div id="md-page-custom" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/Custom.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-custom -->
			
			<div id="md-page-export" class="md-page">
				<?php echo $_smarty_tpl->getSubTemplate ((('modules/Settings/').($_smarty_tpl->tpl_vars['MODULE']->value)).('/Export.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div><!-- md-page-export -->	
			
			
	</div><!-- md-body -->
	
</div><!-- md-container -->


<a id="md-edit-popup-link" data-fancybox-type="iframe" href="#">Edit popup link</a><?php }} ?>