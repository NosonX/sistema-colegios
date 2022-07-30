<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:16:04
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/dashboard_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e57564ab3e41_69084999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0123c37cf0a5cdf648008354c06a715ac76a93e6' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/dashboard_layout.tpl',
      1 => 1659204769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modules/Header.tpl' => 1,
    'file:./menus/admin_menu.tpl' => 1,
    'file:./menus/teacher_menu.tpl' => 1,
    'file:./menus/student_menu.tpl' => 1,
    'file:./modals/create_modal.tpl' => 1,
    'file:./modals/edit_modal.tpl' => 1,
    'file:./modals/delete_modal.tpl' => 1,
    'file:../modules/Footer.tpl' => 1,
  ),
),false)) {
function content_62e57564ab3e41_69084999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:../modules/Header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
    <div class="row vh-100 overflow-hidden">
        <aside class="col-2 bg-white shadow-lg d-flex flex-column justify-content-between py-3">
            <div>
                <div class="text-center">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['publicDir']->value;?>
/assets/images/logo.svg" alt="Bundi Logo">
                </div>
                <hr />
                <?php if ($_smarty_tpl->tpl_vars['role']->value === 'admin') {
$_smarty_tpl->_subTemplateRender('file:./menus/admin_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
                <?php if ($_smarty_tpl->tpl_vars['role']->value === 'profesor') {
$_smarty_tpl->_subTemplateRender('file:./menus/teacher_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
                <?php if ($_smarty_tpl->tpl_vars['role']->value === 'alumno') {
$_smarty_tpl->_subTemplateRender('file:./menus/student_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
            </div>

            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/logout" class="btn btn-outline-danger">
                Salir
                <i class="bi bi-box-arrow-right ms-2"></i>
            </a>
        </aside>

        <div class="col-10 overflow-hidden p-5">
            <div class="mb-2">
                <small class="text-uppercase text-secondary">Panel de <?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</small>
            </div>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_543103962e57564ab0842_17363141', "content");
?>

        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:./modals/create_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./modals/edit_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:./modals/delete_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:../modules/Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_543103962e57564ab0842_17363141 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_543103962e57564ab0842_17363141',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
