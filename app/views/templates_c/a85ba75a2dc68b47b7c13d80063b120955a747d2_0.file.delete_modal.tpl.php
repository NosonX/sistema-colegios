<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:16:04
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/modals/delete_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e57564b00a61_69379427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a85ba75a2dc68b47b7c13d80063b120955a747d2' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/modals/delete_modal.tpl',
      1 => 1659200657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e57564b00a61_69379427 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="deleteModal">
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
</div><?php }
}
