<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:16:04
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/modals/edit_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e57564afe245_74188875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75f17191728d50444590ce3efb444a6e08a32c34' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/modals/edit_modal.tpl',
      1 => 1659200636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e57564afe245_74188875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129769541262e57564afcb61_21073190', "editFormAction");
?>
" method="post">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70249115362e57564afd9c7_66280474', "editFormContent");
?>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </div>
</div><?php }
/* {block "editFormAction"} */
class Block_129769541262e57564afcb61_21073190 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormAction' => 
  array (
    0 => 'Block_129769541262e57564afcb61_21073190',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "editFormAction"} */
/* {block "editFormContent"} */
class Block_70249115362e57564afd9c7_66280474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_70249115362e57564afd9c7_66280474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "editFormContent"} */
}
