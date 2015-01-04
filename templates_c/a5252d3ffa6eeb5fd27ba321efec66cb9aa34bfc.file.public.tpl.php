<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-28 23:45:39
         compiled from "web\public\public.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303665478fb13dff985-69446223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5252d3ffa6eeb5fd27ba321efec66cb9aa34bfc' => 
    array (
      0 => 'web\\public\\public.tpl',
      1 => 1416676648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303665478fb13dff985-69446223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SiteTitle' => 0,
    'CssFile' => 0,
    'JsFile' => 0,
    'URL' => 0,
    'Content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5478fb13e6bc38_51204443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5478fb13e6bc38_51204443')) {function content_5478fb13e6bc38_51204443($_smarty_tpl) {?><!doctype html>
<html>
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['SiteTitle']->value;?>
</title>
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/sunny/jquery-ui.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['CssFile']->value) {?>
    	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CssFile']->value;?>
" />
    <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['JsFile']->value) {?>
    	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JsFile']->value;?>
"><?php echo '</script'; ?>
>
    <?php }?>

</head>
<body>
    
<div id="header">
        <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
">Index</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
login">Login</a>
        <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
45">error</a>
</div>
    
<div id="content">
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['Content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div id="footer">
    (C) Footer
</div>

</body>
</html><?php }} ?>
