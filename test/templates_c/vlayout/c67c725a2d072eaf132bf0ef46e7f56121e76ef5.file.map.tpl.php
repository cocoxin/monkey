<?php /* Smarty version Smarty-3.1.7, created on 2016-10-12 07:51:11
         compiled from "/var/www/html/monkey/includes/runtime/../../layouts/vlayout/modules/Google/map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20828886957fde10b3a59f5-39562920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c67c725a2d072eaf132bf0ef46e7f56121e76ef5' => 
    array (
      0 => '/var/www/html/monkey/includes/runtime/../../layouts/vlayout/modules/Google/map.tpl',
      1 => 1476258660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20828886957fde10b3a59f5-39562920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57fde10b3d0c5',
  'variables' => 
  array (
    'RECORD' => 0,
    'SOURCE_MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57fde10b3d0c5')) {function content_57fde10b3d0c5($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/vlayout/modules/Google/resources/map.js"></script>

<span id="map_record" class="hide"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value;?>
</span>
<span id="map_module" class="hide"><?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
</span>
<div id="map_canvas">
    <span id="map_address" class="hide"></span>
    <img id="map_link" class="pull-right icon-share cursorPointer"></img>
</div>

<?php }} ?>