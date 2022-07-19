<?php
/* Smarty version 4.1.1, created on 2022-07-19 00:59:34
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/admin_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d601f69c6478_79222203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '681385bb1bcc05066ab9da2d33f53b95ca0e2d9d' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/admin_layout.tpl',
      1 => 1658108077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modules/header.tpl' => 1,
    'file:../components/admin_side_menu.tpl' => 1,
    'file:../modules/footer.tpl' => 1,
  ),
),false)) {
function content_62d601f69c6478_79222203 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender('file:../modules/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid">
    <div class="row vh-100 overflow-hidden">
        <aside class="col-2 bg-white shadow-lg d-flex flex-column justify-content-between py-3">
            <div>
                <h1 class="mt-2">Logo</h1>
                <hr />
                <?php $_smarty_tpl->_subTemplateRender('file:../components/admin_side_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>

            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/logout" class="btn btn-outline-danger">
                Salir
                <i class="bi bi-box-arrow-right ms-2"></i>
            </a>
        </aside>

        <div class="col-10 overflow-hidden p-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="display-6"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112011917162d601f69bff67_78271949', "title");
?>
</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                    <i class="bi bi-plus-lg"></i>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105195009762d601f69c1233_09994460', "createButtonText");
?>

                </button>
            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159265569462d601f69c1f64_26489410', "content");
?>



                        <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">Crear nuevo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="createForm" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29659616762d601f69c2c69_62186464', "createFormAction");
?>
" method="post">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205809838562d601f69c3823_04440313', "createFormContent");
?>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </div>
                </div>
            </div>

                        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Editar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editForm" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_192279689162d601f69c4461_93617186', "editFormAction");
?>
" method="post">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177782363962d601f69c51f5_63522169', "editFormContent");
?>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
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

        </div>
    </div>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:../modules/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "title"} */
class Block_112011917162d601f69bff67_78271949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_112011917162d601f69bff67_78271949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_105195009762d601f69c1233_09994460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_105195009762d601f69c1233_09994460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "createButtonText"} */
/* {block "content"} */
class Block_159265569462d601f69c1f64_26489410 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_159265569462d601f69c1f64_26489410',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "createFormAction"} */
class Block_29659616762d601f69c2c69_62186464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormAction' => 
  array (
    0 => 'Block_29659616762d601f69c2c69_62186464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
#<?php
}
}
/* {/block "createFormAction"} */
/* {block "createFormContent"} */
class Block_205809838562d601f69c3823_04440313 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_205809838562d601f69c3823_04440313',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "createFormContent"} */
/* {block "editFormAction"} */
class Block_192279689162d601f69c4461_93617186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormAction' => 
  array (
    0 => 'Block_192279689162d601f69c4461_93617186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "editFormAction"} */
/* {block "editFormContent"} */
class Block_177782363962d601f69c51f5_63522169 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_177782363962d601f69c51f5_63522169',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "editFormContent"} */
}
