<?php
/* Smarty version 4.1.1, created on 2022-07-18 01:30:58
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/teachers/teachers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d4b7d22edda7_91192780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11898317276879b36c5d23ac2f53f9b97be06a43' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/teachers/teachers.tpl',
      1 => 1658107855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./teachers_form.tpl' => 2,
    'file:../../../components/table.tpl' => 1,
  ),
),false)) {
function content_62d4b7d22edda7_91192780 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72505930162d4b7d22e1577_77798631', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2264489162d4b7d22e2b51_58920543', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101362153562d4b7d22e3b91_46793115', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87437324562d4b7d22e8336_17450863', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208955032362d4b7d22e9a42_45740310', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_72505930162d4b7d22e1577_77798631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_72505930162d4b7d22e1577_77798631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profesores<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_2264489162d4b7d22e2b51_58920543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_2264489162d4b7d22e2b51_58920543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear Profesor<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_101362153562d4b7d22e3b91_46793115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_101362153562d4b7d22e3b91_46793115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./teachers_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_87437324562d4b7d22e8336_17450863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_87437324562d4b7d22e8336_17450863',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./teachers_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_208955032362d4b7d22e9a42_45740310 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_208955032362d4b7d22e9a42_45740310',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Apellidos'=>'apellidos','Email'=>'email','Nombre de Usuario'=>'login','Especialista'=>'especialista'),'items'=>$_smarty_tpl->tpl_vars['teachers']->value), 0, false);
}
}
/* {/block "content"} */
}
