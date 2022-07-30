<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:26:37
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/schedules/schedules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e577dd5f40d6_38137709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28d2dba88b84c3c76d4c995feb7afcfde6ffb101' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/schedules/schedules.tpl',
      1 => 1659205594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./schedules_form.tpl' => 2,
    'file:../../../components/content_header.tpl' => 1,
    'file:../../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62e577dd5f40d6_38137709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40669829762e577dd5e3286_74823971', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168754202662e577dd5e4f74_92900774', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89097830362e577dd5e6600_09952413', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35009710662e577dd5eb655_41120568', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73364523562e577dd5ed6b4_99873898', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/dashboard_layout.tpl');
}
/* {block "title"} */
class Block_40669829762e577dd5e3286_74823971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_40669829762e577dd5e3286_74823971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Horarios<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_168754202662e577dd5e4f74_92900774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_168754202662e577dd5e4f74_92900774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear horario<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_89097830362e577dd5e6600_09952413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_89097830362e577dd5e6600_09952413',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./schedules_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_35009710662e577dd5eb655_41120568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_35009710662e577dd5eb655_41120568',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./schedules_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_73364523562e577dd5ed6b4_99873898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_73364523562e577dd5ed6b4_99873898',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/content_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Horarios','createButtonText'=>'Crear horario'), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Día'=>'dia','Hora de Inicio'=>'horaInicio','Hora de Finalización'=>'horaFin','Asignatura'=>'subject.nombre','Nivel'=>'subject.level.nivel'),'items'=>$_smarty_tpl->tpl_vars['schedules']->value), 0, false);
}
}
/* {/block "content"} */
}
