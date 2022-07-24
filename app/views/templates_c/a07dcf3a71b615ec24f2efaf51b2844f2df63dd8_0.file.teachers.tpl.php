<?php
/* Smarty version 4.1.1, created on 2022-07-19 00:56:54
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/teachers/teachers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d60156e56625_42455388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a07dcf3a71b615ec24f2efaf51b2844f2df63dd8' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/teachers/teachers.tpl',
      1 => 1658108077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./teachers_form.tpl' => 2,
    'file:../../../components/table.tpl' => 1,
  ),
),false)) {
function content_62d60156e56625_42455388 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112098252562d60156e488d2_21137987', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_844344962d60156e4a0a7_72790180', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172737646662d60156e4b225_47412330', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173938326162d60156e4ff70_47371675', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3198356362d60156e51a47_83400909', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_112098252562d60156e488d2_21137987 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_112098252562d60156e488d2_21137987',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profesores<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_844344962d60156e4a0a7_72790180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_844344962d60156e4a0a7_72790180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear Profesor<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_172737646662d60156e4b225_47412330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_172737646662d60156e4b225_47412330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./teachers_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_173938326162d60156e4ff70_47371675 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_173938326162d60156e4ff70_47371675',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./teachers_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_3198356362d60156e51a47_83400909 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3198356362d60156e51a47_83400909',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Apellidos'=>'apellidos','Email'=>'email','Nombre de Usuario'=>'login','Especialista'=>'especialista'),'items'=>$_smarty_tpl->tpl_vars['teachers']->value), 0, false);
}
}
/* {/block "content"} */
}
