<?php
/* Smarty version 4.1.1, created on 2022-06-25 04:45:16
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62b692dc4e7983_34845309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73426e3afa6876336949e6a4995cfda9acbae565' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/Home.tpl',
      1 => 1656132315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b692dc4e7983_34845309 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1>Homepage - <?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['apellido']->value;?>
</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi architecto cum cumque cupiditate delectus, dolorum facere harum incidunt iusto laudantium maiores modi molestias nobis ratione sint sit ullam vel.
    </p>
    <button type="button" class="btn btn-secondary"
            data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-custom-class="custom-tooltip"
            title="This top tooltip is themed via CSS variables.">
        Custom tooltip
    </button>
    <?php echo '<script'; ?>
 src="./public/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
