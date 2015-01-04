<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-04 18:09:32
         compiled from "project_code\pages\login\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2101054a973cc867074-13575306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce40f39a2bfef3e3127fafea3d79c6876488a3f8' => 
    array (
      0 => 'project_code\\pages\\login\\login.tpl',
      1 => 1417214758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2101054a973cc867074-13575306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54a973cc8b4ee6_12611898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54a973cc8b4ee6_12611898')) {function content_54a973cc8b4ee6_12611898($_smarty_tpl) {?><h1>Login</h1>

<form action="login/run" method="post">
    
    <label>Login</label><?php echo $_smarty_tpl->tpl_vars['formObj']->value->login;?>
<br />
    <label>Password</label><?php echo $_smarty_tpl->tpl_vars['formObj']->value->password;?>
<br />
    <label></label><input type="submit" />
</form><?php }} ?>
