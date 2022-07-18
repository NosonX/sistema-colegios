<?php
/* Smarty version 4.1.1, created on 2022-07-18 01:32:21
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/subjects/subjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d4b825bf77b2_65969692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7baaad6d593495f3bf12873578c1caf74141f750' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/subjects/subjects.tpl',
      1 => 1658107940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./subjectsForm.tpl' => 2,
    'file:../../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62d4b825bf77b2_65969692 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88195814662d4b825be9905_54322941', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82997599462d4b825beb157_27627530', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106734993262d4b825bec499_89781855', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117734775362d4b825bf0b34_67109626', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133174648862d4b825bf2824_89461171', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/AdminPanelLayout.tpl');
}
/* {block "title"} */
class Block_88195814662d4b825be9905_54322941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_88195814662d4b825be9905_54322941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Asignaturas<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_82997599462d4b825beb157_27627530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_82997599462d4b825beb157_27627530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear asignatura<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_106734993262d4b825bec499_89781855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_106734993262d4b825bec499_89781855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./subjectsForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_117734775362d4b825bf0b34_67109626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_117734775362d4b825bf0b34_67109626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./subjectsForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_133174648862d4b825bf2824_89461171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_133174648862d4b825bf2824_89461171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Nivel'=>'level.nivel','Curso'=>'level.curso','Profesor - Apellidos'=>'teacher.apellidos','Profesor - Nombre'=>'teacher.nombre'),'items'=>$_smarty_tpl->tpl_vars['subjects']->value), 0, false);
}
}
/* {/block "content"} */
}
