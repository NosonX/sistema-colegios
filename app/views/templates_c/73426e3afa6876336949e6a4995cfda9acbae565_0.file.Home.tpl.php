<?php
/* Smarty version 4.1.1, created on 2022-07-02 18:16:58
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c08b9a25f122_74681450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73426e3afa6876336949e6a4995cfda9acbae565' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/login.tpl',
      1 => 1656777913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/header.tpl' => 1,
    'file:components/login.tpl' => 1,
    'file:modules/footer.tpl' => 1,
  ),
),false)) {
function content_62c08b9a25f122_74681450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:modules/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="vh-100 vw-100 d-flex align-items-center justify-content-center">
    <?php $_smarty_tpl->_subTemplateRender('file:components/login.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:modules/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
