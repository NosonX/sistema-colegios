<?php
/* Smarty version 4.1.1, created on 2022-07-02 19:33:09
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/Admins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c09d75413ec9_69059254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f0dff426876a4ded70af966b47f41ec0d910873' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/Admins.tpl',
      1 => 1656790388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c09d75413ec9_69059254 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40092530162c09d754080c3_81884239', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../layouts/AdminPanelLayout.tpl');
}
/* {block "content"} */
class Block_40092530162c09d754080c3_81884239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_40092530162c09d754080c3_81884239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="d-flex justify-content-between align-items-center">
        <h1 class="display-6">Administradores</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAdminModal">
            <i class="bi bi-plus"></i>
            Nuevo administrador
        </button>
    </div>

    <div class="modal fade" id="createAdminModal" tabindex="-1" aria-labelledby="createAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createAdminModalLabel">Crear nuevo administrador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="createForm" action="#" method="post">
                        <div>
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="text" class="form-control" name="email" />
                        </div>
                        <div>
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" name="password" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button form="createForm" type="submit" class="btn btn-primary">Crear</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-striped mt-5">
        <thead>
            <th>ID</th>
            <th>Email</th>
            <th>Clave</th>
            <th class="text-end">Acciones</th>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admins']->value, 'admin');
$_smarty_tpl->tpl_vars['admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['admin']->value->id;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['admin']->value->email;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['admin']->value->clave;?>
</td>
                    <td class="d-flex align-items-center gap-2 justify-content-end">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
/admin/administradores/eliminar/<?php echo $_smarty_tpl->tpl_vars['admin']->value->id;?>
" method="post">
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php
}
}
/* {/block "content"} */
}
