<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:16:04
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/modals/create_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e57564af5509_37615548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d673e1c1a90167d6d34fc4a269bb9792c16b27c' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/modals/create_modal.tpl',
      1 => 1659200618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e57564af5509_37615548 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60063075362e57564af3c08_68492099', "createFormAction");
?>
" method="post">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76996320262e57564af4c01_99426360', "createFormContent");
?>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </div>
</div><?php }
/* {block "createFormAction"} */
class Block_60063075362e57564af3c08_68492099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormAction' => 
  array (
    0 => 'Block_60063075362e57564af3c08_68492099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
#<?php
}
}
/* {/block "createFormAction"} */
/* {block "createFormContent"} */
class Block_76996320262e57564af4c01_99426360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_76996320262e57564af4c01_99426360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "createFormContent"} */
}
