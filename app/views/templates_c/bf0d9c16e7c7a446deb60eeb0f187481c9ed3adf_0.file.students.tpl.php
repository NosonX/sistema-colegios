<?php
/* Smarty version 4.1.1, created on 2022-07-18 02:23:15
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/students/students.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d4c41305e882_82950793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf0d9c16e7c7a446deb60eeb0f187481c9ed3adf' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/students/students.tpl',
      1 => 1658110994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./students_form.tpl' => 2,
    'file:../../../components/table.tpl' => 1,
  ),
),false)) {
function content_62d4c41305e882_82950793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158732412162d4c41304c169_86034353', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98245480362d4c41304df99_21927265', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103200561462d4c41304f602_17584884', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156658886562d4c413055360_46792531', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64903864362d4c413057a40_85781263', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_158732412162d4c41304c169_86034353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_158732412162d4c41304c169_86034353',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Estudiantes<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_98245480362d4c41304df99_21927265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_98245480362d4c41304df99_21927265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear estudiante<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_103200561462d4c41304f602_17584884 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_103200561462d4c41304f602_17584884',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./students_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_156658886562d4c413055360_46792531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_156658886562d4c413055360_46792531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./students_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isEditForm'=>true), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_64903864362d4c413057a40_85781263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_64903864362d4c413057a40_85781263',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Apellidos'=>'apellidos','Nombre de Usuario'=>'login','Nivel'=>'level.nivel','Curso'=>'level.curso'),'items'=>$_smarty_tpl->tpl_vars['students']->value), 0, false);
}
}
/* {/block "content"} */
}
