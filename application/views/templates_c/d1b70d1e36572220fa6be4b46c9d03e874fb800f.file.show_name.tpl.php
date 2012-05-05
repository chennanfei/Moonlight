<?php /* Smarty version Smarty-3.1.3, created on 2012-05-05 12:08:08
         compiled from "D:\Program_Files\Zend\ZendServer\Apache2\htdocs\Moonlight\application/views/templates\gateway\features\show_name.tpl" */ ?>
<?php /*%%SmartyHeaderCode:113944fa4a131c65263-37176125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1b70d1e36572220fa6be4b46c9d03e874fb800f' => 
    array (
      0 => 'D:\\Program_Files\\Zend\\ZendServer\\Apache2\\htdocs\\Moonlight\\application/views/templates\\gateway\\features\\show_name.tpl',
      1 => 1336190880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113944fa4a131c65263-37176125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_4fa4a131c8904',
  'variables' => 
  array (
    'userID' => 0,
    'name' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa4a131c8904')) {function content_4fa4a131c8904($_smarty_tpl) {?><h1>Base information</h1>
<div><label>ID: </label><span><?php echo $_smarty_tpl->tpl_vars['userID']->value;?>
</span></div>
<div><label>Name: </label><span><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</span></div>
<div><label>Address: </label><span><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</span></div><?php }} ?>