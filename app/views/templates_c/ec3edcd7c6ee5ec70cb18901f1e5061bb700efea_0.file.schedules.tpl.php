<?php
/* Smarty version 4.1.1, created on 2022-07-18 01:32:48
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/schedules/schedules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d4b840a2fe54_31835942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec3edcd7c6ee5ec70cb18901f1e5061bb700efea' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/schedules/schedules.tpl',
      1 => 1658107967,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./schedulesForm.tpl' => 2,
    'file:../../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62d4b840a2fe54_31835942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36964043162d4b840a22a37_20128195', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210930673162d4b840a24028_73395040', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177026275762d4b840a251b6_68403592', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176781401262d4b840a29ae7_38885160', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141121209362d4b840a2b470_97599009', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/AdminPanelLayout.tpl');
}
/* {block "title"} */
class Block_36964043162d4b840a22a37_20128195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_36964043162d4b840a22a37_20128195',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Horarios<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_210930673162d4b840a24028_73395040 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_210930673162d4b840a24028_73395040',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear horario<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_177026275762d4b840a251b6_68403592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_177026275762d4b840a251b6_68403592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./schedulesForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_176781401262d4b840a29ae7_38885160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_176781401262d4b840a29ae7_38885160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./schedulesForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_141121209362d4b840a2b470_97599009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_141121209362d4b840a2b470_97599009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Día'=>'dia','Hora de Inicio'=>'horaInicio','Hora de Finalización'=>'horaFin','Asignatura'=>'subject.nombre','Nivel'=>'subject.level.nivel'),'items'=>$_smarty_tpl->tpl_vars['schedules']->value), 0, false);
}
}
/* {/block "content"} */
}
