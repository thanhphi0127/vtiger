<?php /* Smarty version Smarty-3.1.7, created on 2015-12-31 15:53:51
         compiled from "/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/MailManager/MainuiQuickLinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65426565756854f8fe41ec7-46041409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5bd560baf2c1d543f26ac2fd09bec005db971fd' => 
    array (
      0 => '/var/www/html/vtiger/includes/runtime/../../layouts/vlayout/modules/MailManager/MainuiQuickLinks.tpl',
      1 => 1451572586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65426565756854f8fe41ec7-46041409',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_56854f8fe60c0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56854f8fe60c0')) {function content_56854f8fe60c0($_smarty_tpl) {?>

<br><div class="quickWidget"><div class="accordion-heading accordion-toggle quickWidgetHeader"><table width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td class="span5"><div class="dashboardTitle textOverflowEllipsis" title="<?php echo vtranslate('LBL_Mailbox','MailManager');?>
"><h5 class="title widgetTextOverflowEllipsis"><?php echo vtranslate('LBL_Mailbox','MailManager');?>
</h5></div></td><td class="widgeticons span5" align="right"><div class="box pull-right"><a href='#Reload' id="_mailfolder_mm_reload" onclick="MailManager.reload_now();"><i alt="Refresh" title="<?php echo vtranslate('LBL_Refresh','MailManager');?>
" align="absmiddle" border="0" hspace="2" class="icon-refresh"></i></a><a href='#Settings' id="_mailfolder_mm_settings" onclick="MailManager.open_settings_detail();"><i alt="Settings" title="<?php echo vtranslate('LBL_SETTINGS','MailManager');?>
" align="absmiddle" border="0" hspace="2" class="icon-cog"></i></a></div></td></tr></tbody></table><div class="clearfix"></div></div><div class="defaultContainer <?php if ($_smarty_tpl->tpl_vars['MAILBOX']->value->exists()==false){?>hide<?php }?>"><div class="widgetContainer accordion-body collapse in"><input type=hidden name="mm_selected_folder" id="mm_selected_folder"><input type="hidden" name="_folder" id="mailbox_folder"><div class="row-fluid"><div class="span12"><ul class="nav nav-list"><li><a href="javascript:void(0);" onclick="MailManager.mail_compose();"><?php echo vtranslate('LBL_Compose','MailManager');?>
</a></li><li><a href="#Drafts" id="_mailfolder_mm_drafts" onclick="MailManager.folder_drafts(0);"><?php echo vtranslate('LBL_Drafts','MailManager');?>
</a></li></ul></div></div></div></div></div>
<?php }} ?>