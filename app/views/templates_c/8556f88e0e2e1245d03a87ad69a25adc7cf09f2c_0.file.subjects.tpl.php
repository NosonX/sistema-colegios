<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:25:50
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/subjects/subjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e577ae2b4324_98546211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8556f88e0e2e1245d03a87ad69a25adc7cf09f2c' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/subjects/subjects.tpl',
      1 => 1659205548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./subjects_form.tpl' => 2,
    'file:../../../components/content_header.tpl' => 1,
    'file:../../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62e577ae2b4324_98546211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103969311462e577ae2a6dd3_97381436', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_63110323262e577ae2a8399_42920154', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147245430262e577ae2a9532_92453248', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135674854962e577ae2ad405_06831718', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70926678062e577ae2aeda1_82509970', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/dashboard_layout.tpl');
}
/* {block "title"} */
class Block_103969311462e577ae2a6dd3_97381436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_103969311462e577ae2a6dd3_97381436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Asignaturas<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_63110323262e577ae2a8399_42920154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_63110323262e577ae2a8399_42920154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear asignatura<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_147245430262e577ae2a9532_92453248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_147245430262e577ae2a9532_92453248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./subjects_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_135674854962e577ae2ad405_06831718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_135674854962e577ae2ad405_06831718',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./subjects_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_70926678062e577ae2aeda1_82509970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_70926678062e577ae2aeda1_82509970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/content_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Asignaturas','createButtonText'=>'Crear asignatura'), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Nivel'=>'level.nivel','Curso'=>'level.curso','Profesor - Apellidos'=>'teacher.apellidos','Profesor - Nombre'=>'teacher.nombre'),'items'=>$_smarty_tpl->tpl_vars['subjects']->value), 0, false);
}
}
/* {/block "content"} */
}
