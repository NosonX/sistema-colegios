<?php
/* Smarty version 4.1.1, created on 2022-07-02 16:05:13
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c06cb9b0d069_05125845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73426e3afa6876336949e6a4995cfda9acbae565' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/Home.tpl',
      1 => 1656777913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Header.tpl' => 1,
    'file:components/Login.tpl' => 1,
    'file:modules/Footer.tpl' => 1,
  ),
),false)) {
function content_62c06cb9b0d069_05125845 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:modules/Header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="vh-100 vw-100 d-flex align-items-center justify-content-center">
    <?php $_smarty_tpl->_subTemplateRender('file:components/Login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:modules/Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
