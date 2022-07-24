<?php
/* Smarty version 4.1.1, created on 2022-07-19 03:11:31
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/components/content_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d620e3d85163_90884833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c558c22d5941bb5079b13adfb8c4b4ac4bcac9d' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/components/content_header.tpl',
      1 => 1658200291,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d620e3d85163_90884833 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="d-flex justify-content-between align-items-center">
    <h1 class="display-6 text-primary"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <?php if ((isset($_smarty_tpl->tpl_vars['createButtonText']->value)) && $_smarty_tpl->tpl_vars['createButtonText']->value != '') {?>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            <i class="bi bi-plus-lg"></i>
            <?php echo $_smarty_tpl->tpl_vars['createButtonText']->value;?>

        </button>
    <?php }?>
</div><?php }
}
