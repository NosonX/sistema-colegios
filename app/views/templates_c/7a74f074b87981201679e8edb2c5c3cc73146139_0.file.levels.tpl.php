<?php
/* Smarty version 4.1.1, created on 2022-07-19 00:56:57
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/levels/levels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d6015989aa23_97856382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a74f074b87981201679e8edb2c5c3cc73146139' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/levels/levels.tpl',
      1 => 1658108077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./levels_form.tpl' => 2,
    'file:../../../components/table.tpl' => 1,
  ),
),false)) {
function content_62d6015989aa23_97856382 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135139286262d6015988a238_68277179', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184220178262d6015988bdf1_53444116', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185285269762d6015988d517_32392737', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139569933662d60159892f02_82876008', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43055830662d601598953c1_15877945', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_135139286262d6015988a238_68277179 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_135139286262d6015988a238_68277179',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Niveles<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_184220178262d6015988bdf1_53444116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_184220178262d6015988bdf1_53444116',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear nivel<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_185285269762d6015988d517_32392737 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_185285269762d6015988d517_32392737',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./levels_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_139569933662d60159892f02_82876008 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_139569933662d60159892f02_82876008',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./levels_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_43055830662d601598953c1_15877945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_43055830662d601598953c1_15877945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nivel'=>'nivel','Curso'=>'curso','Aula'=>'aula'),'items'=>$_smarty_tpl->tpl_vars['levels']->value), 0, false);
}
}
/* {/block "content"} */
}
