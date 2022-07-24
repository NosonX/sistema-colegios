<?php
/* Smarty version 4.1.1, created on 2022-07-19 00:56:55
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/subjects/subjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d60157bcb040_85113160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8556f88e0e2e1245d03a87ad69a25adc7cf09f2c' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/subjects/subjects.tpl',
      1 => 1658108077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./subjects_form.tpl' => 2,
    'file:../../../components/table.tpl' => 1,
  ),
),false)) {
function content_62d60157bcb040_85113160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_193947564562d60157bbd895_61143933', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196095545662d60157bbed43_54286032', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28803560162d60157bbfd12_41831061', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43848021162d60157bc36a9_16378669', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112246383962d60157bc4da0_76417131', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_193947564562d60157bbd895_61143933 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_193947564562d60157bbd895_61143933',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Asignaturas<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_196095545662d60157bbed43_54286032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_196095545662d60157bbed43_54286032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear asignatura<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_28803560162d60157bbfd12_41831061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_28803560162d60157bbfd12_41831061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./subjects_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_43848021162d60157bc36a9_16378669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_43848021162d60157bc36a9_16378669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./subjects_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_112246383962d60157bc4da0_76417131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_112246383962d60157bc4da0_76417131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Nivel'=>'level.nivel','Curso'=>'level.curso','Profesor - Apellidos'=>'teacher.apellidos','Profesor - Nombre'=>'teacher.nombre'),'items'=>$_smarty_tpl->tpl_vars['subjects']->value), 0, false);
}
}
/* {/block "content"} */
}
