<?php
/* Smarty version 4.1.1, created on 2022-07-05 02:30:46
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/AdminPanelLayout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c3a2569d5679_80713366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c26437553feb3199a9d4e319b9e87fd4f478cab' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/AdminPanelLayout.tpl',
      1 => 1656988242,
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
function content_62c3a2569d5679_80713366 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="display-6"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154050445462c3a2569cddd4_28008026', "title");
?>
</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                    <i class="bi bi-plus-lg"></i>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53777024662c3a2569cf4d7_90388445', "createButtonText");
?>

                </button>
            </div>

            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">Crear nuevo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="createForm" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121217816062c3a2569d0bf8_81858940', "createFormAction");
?>
" method="post">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168837470962c3a2569d2208_62889031', "createFormContent");
?>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button form="createForm" type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="deleteModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">Eliminar</div>
                        <div class="modal-body">
                            ¿Seguro que desea eliminar el registro?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <form id="deleteForm" action="" method="post">
                                <button type="submit" class="btn btn-danger">Confirmar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155685095562c3a2569d3745_03350663', "content");
?>

        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:../modules/Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "title"} */
class Block_154050445462c3a2569cddd4_28008026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_154050445462c3a2569cddd4_28008026',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_53777024662c3a2569cf4d7_90388445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_53777024662c3a2569cf4d7_90388445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "createButtonText"} */
/* {block "createFormAction"} */
class Block_121217816062c3a2569d0bf8_81858940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormAction' => 
  array (
    0 => 'Block_121217816062c3a2569d0bf8_81858940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "createFormAction"} */
/* {block "createFormContent"} */
class Block_168837470962c3a2569d2208_62889031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_168837470962c3a2569d2208_62889031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "createFormContent"} */
/* {block "content"} */
class Block_155685095562c3a2569d3745_03350663 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_155685095562c3a2569d3745_03350663',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
}
