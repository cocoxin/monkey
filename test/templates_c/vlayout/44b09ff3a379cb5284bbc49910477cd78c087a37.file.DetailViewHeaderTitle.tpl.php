<?php /* Smarty version Smarty-3.1.7, created on 2016-10-20 08:11:12
         compiled from "/var/www/html/monkey/includes/runtime/../../layouts/vlayout/modules/HelpDesk/DetailViewHeaderTitle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:95497392358087c202a6949-43250267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44b09ff3a379cb5284bbc49910477cd78c087a37' => 
    array (
      0 => '/var/www/html/monkey/includes/runtime/../../layouts/vlayout/modules/HelpDesk/DetailViewHeaderTitle.tpl',
      1 => 1475110239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95497392358087c202a6949-43250267',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECORD' => 0,
    'MODULE_MODEL' => 0,
    'NAME_FIELD' => 0,
    'FIELD_MODEL' => 0,
    'PRIORITY' => 0,
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_58087c20485e4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58087c20485e4')) {function content_58087c20485e4($_smarty_tpl) {?>
<span class="span2"><img src="<?php echo vimage_path('summary_Tickets.png');?>
" class="summaryImg" /></span><span class="span10 margin0px"><span class="row-fluid"><h4 class="recordLabel" title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
"><?php  $_smarty_tpl->tpl_vars['NAME_FIELD'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getNameFields(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['NAME_FIELD']->key => $_smarty_tpl->tpl_vars['NAME_FIELD']->value){
$_smarty_tpl->tpl_vars['NAME_FIELD']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField($_smarty_tpl->tpl_vars['NAME_FIELD']->value), null, 0);?><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPermissions()){?><span class="<?php echo $_smarty_tpl->tpl_vars['NAME_FIELD']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['NAME_FIELD']->value);?>
</span>&nbsp;<?php }?><?php } ?></h4></span><?php $_smarty_tpl->tpl_vars['PRIORITY'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->get('ticketpriorities'), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['PRIORITY']->value)){?><span class="row-fluid"><span class="muted"><?php echo vtranslate('Priority',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 - </span><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('ticketpriorities');?>
</span><?php }?></span><?php }} ?>