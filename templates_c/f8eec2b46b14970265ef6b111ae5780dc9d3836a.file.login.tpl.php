<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-29 02:49:06
         compiled from "project_code\pages\login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:347754792612b02371-48524245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8eec2b46b14970265ef6b111ae5780dc9d3836a' => 
    array (
      0 => 'project_code\\pages\\login\\login.tpl',
      1 => 1417214758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '347754792612b02371-48524245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54792612b46e85_82313784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54792612b46e85_82313784')) {function content_54792612b46e85_82313784($_smarty_tpl) {?><h1>Login</h1>

<form action="login/run" method="post">
    
    <label>Login</label><?php echo $_smarty_tpl->tpl_vars['formObj']->value->login;?>
<br />
    <label>Password</label><?php echo $_smarty_tpl->tpl_vars['formObj']->value->password;?>
<br />
    <label></label><input type="submit" />
</form><?php }} ?>
