<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:19:37
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/admin_layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e57639358e84_56906456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4877c6a6d09ceadf070e5a984d10f91bf606783d' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/admin_layout.tpl',
      1 => 1659201722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../modules/Header.tpl' => 1,
    'file:../dashboards/admin/admin_menu.tpl' => 1,
    'file:../modules/Footer.tpl' => 1,
  ),
),false)) {
function content_62e57639358e84_56906456 (Smarty_Internal_Template $_smarty_tpl) {
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
                <?php $_smarty_tpl->_subTemplateRender('file:../dashboards/admin/admin_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>

            <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/logout" class="btn btn-outline-danger">
                Salir
                <i class="bi bi-box-arrow-right ms-2"></i>
            </a>
        </aside>

        <div class="col-10 overflow-hidden p-5">
            <div class="mb-2">
                <small class="text-uppercase text-secondary">Panel de Administrador</small>
            </div>

            <div class="d-flex justify-content-between align-items-center">
                <h1 class="display-6 text-primary"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31820987662e5763934f593_55770309', "title");
?>
</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                    <i class="bi bi-plus-lg"></i>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49924119962e57639350b58_94308375', "createButtonText");
?>

                </button>
            </div>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140199037662e57639351eb9_75775026', "content");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155924641562e576393533e9_93441130', "createFormAction");
?>
" method="post">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_22924441962e57639354851_12053723', "createFormContent");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50491049062e57639355ce1_60879087', "editFormAction");
?>
" method="post">
                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99348931262e57639356fa3_51214278', "editFormContent");
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


<?php $_smarty_tpl->_subTemplateRender('file:../modules/Footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "title"} */
class Block_31820987662e5763934f593_55770309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_31820987662e5763934f593_55770309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_49924119962e57639350b58_94308375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_49924119962e57639350b58_94308375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "createButtonText"} */
/* {block "content"} */
class Block_140199037662e57639351eb9_75775026 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_140199037662e57639351eb9_75775026',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* {block "createFormAction"} */
class Block_155924641562e576393533e9_93441130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormAction' => 
  array (
    0 => 'Block_155924641562e576393533e9_93441130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
#<?php
}
}
/* {/block "createFormAction"} */
/* {block "createFormContent"} */
class Block_22924441962e57639354851_12053723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_22924441962e57639354851_12053723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "createFormContent"} */
/* {block "editFormAction"} */
class Block_50491049062e57639355ce1_60879087 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormAction' => 
  array (
    0 => 'Block_50491049062e57639355ce1_60879087',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "editFormAction"} */
/* {block "editFormContent"} */
class Block_99348931262e57639356fa3_51214278 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_99348931262e57639356fa3_51214278',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "editFormContent"} */
}
