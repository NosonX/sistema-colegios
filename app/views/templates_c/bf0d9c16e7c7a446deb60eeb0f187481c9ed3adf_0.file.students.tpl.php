<?php
/* Smarty version 4.1.1, created on 2022-07-18 01:31:14
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/students/students.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d4b7e293a666_50474320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf0d9c16e7c7a446deb60eeb0f187481c9ed3adf' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/students/students.tpl',
      1 => 1658107873,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./studentsForm.tpl' => 2,
    'file:../../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62d4b7e293a666_50474320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179298245362d4b7e292ba59_78908108', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115409328262d4b7e292cfc0_76927704', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26029992362d4b7e292e120_77619806', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110915974662d4b7e29337d9_84987720', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203580955362d4b7e2935622_34512880', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/AdminPanelLayout.tpl');
}
/* {block "title"} */
class Block_179298245362d4b7e292ba59_78908108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_179298245362d4b7e292ba59_78908108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Estudiantes<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_115409328262d4b7e292cfc0_76927704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_115409328262d4b7e292cfc0_76927704',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear estudiante<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_26029992362d4b7e292e120_77619806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_26029992362d4b7e292e120_77619806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./studentsForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_110915974662d4b7e29337d9_84987720 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_110915974662d4b7e29337d9_84987720',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./studentsForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_203580955362d4b7e2935622_34512880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_203580955362d4b7e2935622_34512880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Apellidos'=>'apellidos','Nombre de Usuario'=>'login','Nivel'=>'level.nivel','Curso'=>'level.curso'),'items'=>$_smarty_tpl->tpl_vars['students']->value), 0, false);
}
}
/* {/block "content"} */
}
