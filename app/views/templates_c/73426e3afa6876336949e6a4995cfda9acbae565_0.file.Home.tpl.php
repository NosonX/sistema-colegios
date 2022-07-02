<?php
/* Smarty version 4.1.1, created on 2022-07-02 04:40:26
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62bfcc3a98c341_31909680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73426e3afa6876336949e6a4995cfda9acbae565' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/Home.tpl',
      1 => 1656736753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62bfcc3a98c341_31909680 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="./public/assets/css/main.css">
</head>
<body>
    <h1>Homepage</h1>
    <form action="/sistema-colegios/create" method="post">
        <input type="text" name="email" />
        <input type="text" name="clave" />
        <input type="submit">
    </form>

    <h2>Lista de emails</h2>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admins']->value, 'admin');
$_smarty_tpl->tpl_vars['admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->do_else = false;
?>
        <p><?php echo $_smarty_tpl->tpl_vars['admin']->value->email;?>
</p>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php echo '<script'; ?>
 src="./public/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
