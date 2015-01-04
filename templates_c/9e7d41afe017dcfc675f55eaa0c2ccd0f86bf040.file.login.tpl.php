<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-28 23:46:00
         compiled from "project_code\login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218875478fb13e7e3a7-91210122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e7d41afe017dcfc675f55eaa0c2ccd0f86bf040' => 
    array (
      0 => 'project_code\\login\\login.tpl',
      1 => 1417214758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218875478fb13e7e3a7-91210122',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5478fb13e8a085_80746482',
  'variables' => 
  array (
    'formObj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5478fb13e8a085_80746482')) {function content_5478fb13e8a085_80746482($_smarty_tpl) {?><h1>Login</h1>

<form action="login/run" method="post">
    
    <label>Login</label><?php echo $_smarty_tpl->tpl_vars['formObj']->value->login;?>
<br />
    <label>Password</label><?php echo $_smarty_tpl->tpl_vars['formObj']->value->password;?>
<br />
    <label></label><input type="submit" />
</form><?php }} ?>
