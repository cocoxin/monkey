<?php /* Smarty version Smarty-3.1.7, created on 2016-10-20 02:33:31
         compiled from "/var/www/html/monkey/includes/runtime/../../layouts/vlayout/modules/Users/Login.Default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31307673257ec6730626312-67807701%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4509578e9666e63bf5865abdf0c26c19fcb08af' => 
    array (
      0 => '/var/www/html/monkey/includes/runtime/../../layouts/vlayout/modules/Users/Login.Default.tpl',
      1 => 1476930807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31307673257ec6730626312-67807701',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_57ec673084572',
  'variables' => 
  array (
    'COMPANY_DETAILSCOMPANY_DETAILS' => 0,
    'COMPANY_DETAILS' => 0,
    'APPUNIQUEKEY' => 0,
    'CURRENT_VERSION' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ec673084572')) {function content_57ec673084572($_smarty_tpl) {?>
<!DOCTYPE html><html><head><title>登录页面</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- for Login page we are added --><link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet"><link href="libraries/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"><link href="libraries/bootstrap/css/jqueryBxslider.css" rel="stylesheet" /><script src="libraries/jquery/jquery.min.js"></script><script src="libraries/jquery/boxslider/jqueryBxslider.js"></script><script src="libraries/jquery/boxslider/respond.min.js"></script><script>jQuery(document).ready(function(){scrollx = jQuery(window).outerWidth();window.scrollTo(scrollx,0);slider = jQuery('.bxslider').bxSlider({auto: true,pause: 4000,randomStart : true,autoHover: true});jQuery('.bx-prev, .bx-next, .bx-pager-item').live('click',function(){ slider.startAuto(); });});</script></head><body><div class="container-fluid login-container"><div class="row-fluid"><div class="span3"><div class="logo"><img src="layouts/vlayout/skins/images/logo.png"><br /><a target="_blank" href="http://<?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILSCOMPANY_DETAILS']->value['website'];?>
"><?php echo $_smarty_tpl->tpl_vars['COMPANY_DETAILS']->value['name'];?>
</a></div></div></div><div class="row-fluid"><div class="span12"><div class="content-wrapper"><div class="container-fluid"><div class="row-fluid"><div class="span6"><div class="carousal-container"><div><h2> 企业自助平台1.0 </h2></div><ul class="bxslider"><li><div id="slide01" class="slide"><img class="pull-left" src="<?php echo vimage_path('android_text.png');?>
"><img class="pull-right" src="<?php echo vimage_path('android.png');?>
"/></div></li><li><div id="slide02" class="slide"><img class="pull-left" src="<?php echo vimage_path('iphone_text.png');?>
"/><img class="pull-right" src="<?php echo vimage_path('iphone.png');?>
"/></div></li><li><div id="slide03" class="slide"><img class="pull-left" src="<?php echo vimage_path('ipad_text.png');?>
"/><img class="pull-right" src="<?php echo vimage_path('ipad.png');?>
"/></div></li><li><div id="slide04" class="slide"><img class="pull-left" src="<?php echo vimage_path('exchange_conn_text.png');?>
"/><img class="pull-right" src="<?php echo vimage_path('exchange_conn.png');?>
"/></div></li><li><div id="slide05" class="slide"><img class="pull-left" src="<?php echo vimage_path('outlook_text.png');?>
"/><img class="pull-right" src="<?php echo vimage_path('outlook.png');?>
"/></div></li></ul></div></div><div class="span6"><div class="login-area"><div class="login-box" id="loginDiv"><div class=""><h3 class="login-header">登 录</h3></div><form class="form-horizontal login-form" style="margin:0;" action="index.php?module=Users&action=Login" method="POST"><?php if (isset($_REQUEST['error'])){?><div class="alert alert-error"><p>用户名或密码无效</p></div><?php }?><?php if (isset($_REQUEST['fpError'])){?><div class="alert alert-error"><p>用户名或邮件无效</p></div><?php }?><?php if (isset($_REQUEST['status'])){?><div class="alert alert-success"><p>以发送到您的邮件，请查收</p></div><?php }?><?php if (isset($_REQUEST['statusError'])){?><div class="alert alert-error"><p>邮件环境没有配置</p></div><?php }?><div class="control-group"><label class="control-label" for="username"><b>用户名</b></label><div class="controls"><input type="text" id="username" name="username" placeholder="Username"></div></div><div class="control-group"><label class="control-label" for="password"><b>密&nbsp;&nbsp;码</b></label><div class="controls"><input type="password" id="password" name="password" placeholder="Password"></div></div><div class="control-group signin-button"><div class="controls" id="forgotPassword"><button type="submit" class="btn btn-primary sbutton">登 录</button>&nbsp;&nbsp;&nbsp;<a>忘记密码 ?</a></div></div><img src='//stats.vtiger.com/stats.php?uid=<?php echo $_smarty_tpl->tpl_vars['APPUNIQUEKEY']->value;?>
&v=<?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>
&type=U' alt='' title='' border=0 width='1px' height='1px'></form><div class="login-subscript"><small> Powered by monkey CRM <?php echo $_smarty_tpl->tpl_vars['CURRENT_VERSION']->value;?>
</small></div></div><div class="login-box hide" id="forgotPasswordDiv"><form class="form-horizontal login-form" style="margin:0;" action="forgotPassword.php" method="POST"><div class=""><h3 class="login-header">忘记密码</h3></div><div class="control-group"><label class="control-label" for="user_name"><b>用户名</b></label><div class="controls"><input type="text" id="user_name" name="user_name" placeholder="Username"></div></div><div class="control-group"><label class="control-label" for="email"><b>邮箱</b></label><div class="controls"><input type="text" id="emailId" name="emailId"  placeholder="Email"></div></div><div class="control-group signin-button"><div class="controls" id="backButton"><input type="submit" class="btn btn-primary sbutton" value="提交" name="retrievePassword">&nbsp;&nbsp;&nbsp;<a>返回</a></div></div></form></div></div></div></div></div></div></div></div></div><div class="navbar navbar-fixed-bottom"  style="display:none"><div class="navbar-inner"><div class="container-fluid"><div class="row-fluid"><div class="span6 pull-left" ><div class="footer-content"><small>&#169 Copyright ©  2015-<?php echo date('Y');?>
&nbsp; CC Corporation All Rights XX科技有限公司<!-- <a href="https://www.vtiger.com"> xx.com</a> |<a href="https://www.vtiger.com/LICENSE.txt">Read License</a> |<a href="https://www.vtiger.com/products/crm/privacy_policy.html">Privacy Policy</a> --> </small></div></div><div class="span6 pull-right"><div class="pull-right footer-icons"><small><?php echo vtranslate('LBL_CONNECT_WITH_US',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;</small></div></div></div></div></div></div></body><script>jQuery(document).ready(function(){jQuery("#forgotPassword a").click(function() {jQuery("#loginDiv").hide();jQuery("#forgotPasswordDiv").show();});jQuery("#backButton a").click(function() {jQuery("#loginDiv").show();jQuery("#forgotPasswordDiv").hide();});jQuery("input[name='retrievePassword']").click(function (){var username = jQuery('#user_name').val();var email = jQuery('#emailId').val();var email1 = email.replace(/^\s+/,'').replace(/\s+$/,'');var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;if(username == ''){alert('Please enter valid username');return false;} else if(!emailFilter.test(email1) || email == ''){alert('Please enater valid email address');return false;} else if(email.match(illegalChars)){alert( "The email address contains illegal characters.");return false;} else {return true;}});});</script></html>
<?php }} ?>