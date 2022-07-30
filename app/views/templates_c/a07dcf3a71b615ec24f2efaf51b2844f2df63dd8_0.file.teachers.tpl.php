<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:21:40
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/teachers/teachers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e576b46e6368_14494805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a07dcf3a71b615ec24f2efaf51b2844f2df63dd8' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/teachers/teachers.tpl',
      1 => 1659205299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./teachers_form.tpl' => 2,
    'file:../../../components/content_header.tpl' => 1,
    'file:../../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62e576b46e6368_14494805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26897687162e576b46d6cf9_35994463', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20231044662e576b46dc947_68632704', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20252948162e576b46def69_81639401', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/dashboard_layout.tpl');
}
/* {block "createFormContent"} */
class Block_26897687162e576b46d6cf9_35994463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_26897687162e576b46d6cf9_35994463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./teachers_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_20231044662e576b46dc947_68632704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_20231044662e576b46dc947_68632704',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./teachers_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_20252948162e576b46def69_81639401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20252948162e576b46def69_81639401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/content_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Profesores','createButtonText'=>'Crear profesor'), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Apellidos'=>'apellidos','Email'=>'email','Nombre de Usuario'=>'login','Especialista'=>'especialista'),'items'=>$_smarty_tpl->tpl_vars['teachers']->value), 0, false);
}
}
/* {/block "content"} */
}
