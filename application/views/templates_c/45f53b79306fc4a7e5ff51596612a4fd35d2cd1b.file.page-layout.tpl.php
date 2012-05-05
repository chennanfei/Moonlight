<?php /* Smarty version Smarty-3.1.3, created on 2012-05-05 12:00:00
         compiled from "D:\Program_Files\Zend\ZendServer\Apache2\htdocs\Moonlight\application/views/templates\gateway\page-layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:59674fa49d85ac3d43-03381861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45f53b79306fc4a7e5ff51596612a4fd35d2cd1b' => 
    array (
      0 => 'D:\\Program_Files\\Zend\\ZendServer\\Apache2\\htdocs\\Moonlight\\application/views/templates\\gateway\\page-layout.tpl',
      1 => 1336190396,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59674fa49d85ac3d43-03381861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_4fa49d85af69a',
  'variables' => 
  array (
    'show_name' => 0,
    'show_contacts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa49d85af69a')) {function content_4fa49d85af69a($_smarty_tpl) {?><!DOCTYPE>
<html>
<head>
	<title>Parallel runs</title>
</head>
<body>
	<div style="border: 1px solid red; float: left; width: 40%;">
		<?php echo $_smarty_tpl->tpl_vars['show_name']->value;?>

	</div>
	<div style="border: 1px solid blue; float: right; width: 40%;">
		<?php echo $_smarty_tpl->tpl_vars['show_contacts']->value;?>

	</div>
</body>
</html><?php }} ?>