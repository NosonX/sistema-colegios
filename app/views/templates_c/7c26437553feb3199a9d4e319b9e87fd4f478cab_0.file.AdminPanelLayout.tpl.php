<?php
/* Smarty version 4.1.1, created on 2022-07-02 18:38:11
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/AdminPanelLayout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c09093c40668_61315123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c26437553feb3199a9d4e319b9e87fd4f478cab' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/AdminPanelLayout.tpl',
      1 => 1656787090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modules/Header.tpl' => 1,
    'file:../components/AdminSideNav.tpl' => 1,
    'file:../modules/Footer.tpl' => 1,
  ),
),false)) {
function content_62c09093c40668_61315123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:../modules/Header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
    <div class="row vh-100 overflow-hidden">
        <aside class="col-2 bg-white shadow-lg d-flex flex-column justify-content-between py-3">
            <div>
                <h1 class="mt-2">Logo</h1>
                <hr />
                <?php $_smarty_tpl->_subTemplateRender('file:../components/AdminSideNav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>

            <a href="./logout" class="btn btn-outline-danger">
                Salir
                <i class="bi bi-box-arrow-right ms-2"></i>
            </a>
        </aside>
        <div class="col-10 overflow-hidden p-5">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148186437562c09093c3f4a5_52165022', "content");
?>

        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:../modules/Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "content"} */
class Block_148186437562c09093c3f4a5_52165022 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_148186437562c09093c3f4a5_52165022',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
