<?php /* Smarty version Smarty-3.1.3, created on 2012-05-05 12:08:23
         compiled from "D:\Program_Files\Zend\ZendServer\Apache2\htdocs\Moonlight\application/views/templates\gateway\gateway.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310194fa49a6eb5e5d7-71719837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '508ee4e4cad440799d615a66665a47d7a7f713ea' => 
    array (
      0 => 'D:\\Program_Files\\Zend\\ZendServer\\Apache2\\htdocs\\Moonlight\\application/views/templates\\gateway\\gateway.tpl',
      1 => 1336190406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310194fa49a6eb5e5d7-71719837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_4fa49a6ebf941',
  'variables' => 
  array (
    'userID' => 0,
    'name' => 0,
    'address' => 0,
    'phone' => 0,
    'msn' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa49a6ebf941')) {function content_4fa49a6ebf941($_smarty_tpl) {?><!DOCTYPE>
<html>
<head>
	<title>Serialization runs</title>
</head>
<body>
	<div style="border: 1px solid red; float: left; width: 40%;">
		<h1>Base information</h1>
		<div><label>ID: </label><span><?php echo $_smarty_tpl->tpl_vars['userID']->value;?>
</span></div>
		<div><label>Name: </label><span><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span></div>
		<div><label>Address: </label><span><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</span></div>
	</div>
	<div style="border: 1px solid blue; float: right; width: 40%;">
		<h1>Contacts</h1>
		<div><label>Phone: </label><span><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</span></div>
		<div><label>MSN: </label><span><?php echo $_smarty_tpl->tpl_vars['msn']->value;?>
</span></div>
	</div>
</body>
</html><?php }} ?>