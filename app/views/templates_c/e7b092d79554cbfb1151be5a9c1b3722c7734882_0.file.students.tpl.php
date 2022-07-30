<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:23:57
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/students/students.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e5773d944cb6_26230582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7b092d79554cbfb1151be5a9c1b3722c7734882' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/students/students.tpl',
      1 => 1659205436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./students_form.tpl' => 2,
    'file:../../../components/content_header.tpl' => 1,
    'file:../../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62e5773d944cb6_26230582 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66121114262e5773d93a492_87666400', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156004623262e5773d93e671_74349149', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32451581062e5773d940256_26990436', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/dashboard_layout.tpl');
}
/* {block "createFormContent"} */
class Block_66121114262e5773d93a492_87666400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_66121114262e5773d93a492_87666400',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./students_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_156004623262e5773d93e671_74349149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_156004623262e5773d93e671_74349149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./students_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isEditForm'=>true), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_32451581062e5773d940256_26990436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_32451581062e5773d940256_26990436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/content_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Estudantes','createButtonText'=>'Crear estudiante'), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Apellidos'=>'apellidos','Nombre de Usuario'=>'login','Nivel'=>'level.nivel','Curso'=>'level.curso'),'items'=>$_smarty_tpl->tpl_vars['students']->value), 0, false);
}
}
/* {/block "content"} */
}
