<?php
/* Smarty version 4.1.1, created on 2022-07-19 00:56:55
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/students/students.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d60157668297_61107067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7b092d79554cbfb1151be5a9c1b3722c7734882' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/students/students.tpl',
      1 => 1658110994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./students_form.tpl' => 2,
    'file:../../../components/table.tpl' => 1,
  ),
),false)) {
function content_62d60157668297_61107067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210053711862d60157658a80_79516602', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18325298462d6015765af21_19309059', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90250784662d6015765c316_01972999', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206136299962d60157661023_69757884', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129521818462d60157663245_04638964', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_210053711862d60157658a80_79516602 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_210053711862d60157658a80_79516602',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Estudiantes<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_18325298462d6015765af21_19309059 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_18325298462d6015765af21_19309059',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear estudiante<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_90250784662d6015765c316_01972999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_90250784662d6015765c316_01972999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./students_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_206136299962d60157661023_69757884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_206136299962d60157661023_69757884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./students_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isEditForm'=>true), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_129521818462d60157663245_04638964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_129521818462d60157663245_04638964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Apellidos'=>'apellidos','Nombre de Usuario'=>'login','Nivel'=>'level.nivel','Curso'=>'level.curso'),'items'=>$_smarty_tpl->tpl_vars['students']->value), 0, false);
}
}
/* {/block "content"} */
}
