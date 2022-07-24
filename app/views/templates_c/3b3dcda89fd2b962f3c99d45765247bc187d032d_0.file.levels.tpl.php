<?php
/* Smarty version 4.1.1, created on 2022-07-18 01:31:55
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/levels/levels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d4b80b526d87_62012727',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b3dcda89fd2b962f3c99d45765247bc187d032d' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/levels/levels.tpl',
      1 => 1658107913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./levels_form.tpl' => 2,
    'file:../../../components/table.tpl' => 1,
  ),
),false)) {
function content_62d4b80b526d87_62012727 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36281588162d4b80b51c795_80585887', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117809995162d4b80b51d8d5_54926396', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199912544862d4b80b51e5c4_53027268', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177999386062d4b80b522693_82616949', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17241780662d4b80b523991_45087294', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_36281588162d4b80b51c795_80585887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_36281588162d4b80b51c795_80585887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Niveles<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_117809995162d4b80b51d8d5_54926396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_117809995162d4b80b51d8d5_54926396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear nivel<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_199912544862d4b80b51e5c4_53027268 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_199912544862d4b80b51e5c4_53027268',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./levels_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_177999386062d4b80b522693_82616949 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_177999386062d4b80b522693_82616949',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./levels_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_17241780662d4b80b523991_45087294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17241780662d4b80b523991_45087294',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nivel'=>'nivel','Curso'=>'curso','Aula'=>'aula'),'items'=>$_smarty_tpl->tpl_vars['levels']->value), 0, false);
}
}
/* {/block "content"} */
}
