<?php
/* Smarty version 4.1.1, created on 2022-07-19 00:56:56
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/schedules/schedules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d60158d532f0_09940403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28d2dba88b84c3c76d4c995feb7afcfde6ffb101' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/schedules/schedules.tpl',
      1 => 1658108077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./schedules_form.tpl' => 2,
    'file:../../../components/table.tpl' => 1,
  ),
),false)) {
function content_62d60158d532f0_09940403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189295748162d60158d41972_91168840', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2017909862d60158d440d5_59527743', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86485154762d60158d45720_60356600', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80873793062d60158d4b0e0_16651581', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195702491062d60158d4d1e6_43472573', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_189295748162d60158d41972_91168840 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_189295748162d60158d41972_91168840',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Horarios<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_2017909862d60158d440d5_59527743 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_2017909862d60158d440d5_59527743',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear horario<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_86485154762d60158d45720_60356600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_86485154762d60158d45720_60356600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./schedules_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_80873793062d60158d4b0e0_16651581 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_80873793062d60158d4b0e0_16651581',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./schedules_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_195702491062d60158d4d1e6_43472573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_195702491062d60158d4d1e6_43472573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Día'=>'dia','Hora de Inicio'=>'horaInicio','Hora de Finalización'=>'horaFin','Asignatura'=>'subject.nombre','Nivel'=>'subject.level.nivel'),'items'=>$_smarty_tpl->tpl_vars['schedules']->value), 0, false);
}
}
/* {/block "content"} */
}
