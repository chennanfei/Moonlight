<?php /* Smarty version Smarty-3.1.3, created on 2012-05-05 11:46:58
         compiled from "D:\Program_Files\Zend\ZendServer\Apache2\htdocs\Moonlight\application/views/templates\gateway\features\show_contacts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11424fa4a2b23ffb42-12121740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7cf900405ca39229bcf4be93261837905440cc8' => 
    array (
      0 => 'D:\\Program_Files\\Zend\\ZendServer\\Apache2\\htdocs\\Moonlight\\application/views/templates\\gateway\\features\\show_contacts.tpl',
      1 => 1336189250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11424fa4a2b23ffb42-12121740',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'phone' => 0,
    'msn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.3',
  'unifunc' => 'content_4fa4a2b242907',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa4a2b242907')) {function content_4fa4a2b242907($_smarty_tpl) {?><h1>Contacts</h1>
<div><label>Phone: </label><span><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
</span></div>
<div><label>MSN: </label><span><?php echo $_smarty_tpl->tpl_vars['msn']->value;?>
</span></div><?php }} ?>