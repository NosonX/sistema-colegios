<?php
/* Smarty version 4.1.1, created on 2022-07-09 05:24:38
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/levels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c911168a4407_61472930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '702a037a9d4a2d601f3c631e05315367c0955a1a' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/levels.tpl',
      1 => 1657342019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/table.tpl' => 1,
  ),
),false)) {
function content_62c911168a4407_61472930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86293817162c9111689ce74_31207149', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39333333362c9111689dd13_55634592', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186190117062c9111689e8f3_74211281', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165855455762c9111689f495_63738733', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164863415462c911168a0023_73116176', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_86293817162c9111689ce74_31207149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_86293817162c9111689ce74_31207149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Niveles<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_39333333362c9111689dd13_55634592 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_39333333362c9111689dd13_55634592',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear nivel<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_186190117062c9111689e8f3_74211281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_186190117062c9111689e8f3_74211281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="nivel" class="form-label">Nivel</label>
        <input type="text" class="form-control" name="nivel" required />
    </div>
    <div>
        <label for="curso" class="form-label">Curso</label>
        <input type="text" class="form-control" name="curso" required />
    </div>
    <div>
        <label for="aula" class="form-label">Aula</label>
        <input type="text" class="form-control" name="aula" required />
    </div>
<?php
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_165855455762c9111689f495_63738733 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_165855455762c9111689f495_63738733',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="nivel" class="form-label">Nivel</label>
        <input type="text" class="form-control" name="nivel" required />
    </div>
    <div>
        <label for="curso" class="form-label">Curso</label>
        <input type="text" class="form-control" name="curso" required />
    </div>
    <div>
        <label for="aula" class="form-label">Aula</label>
        <input type="text" class="form-control" name="aula" required />
    </div>
<?php
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_164863415462c911168a0023_73116176 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_164863415462c911168a0023_73116176',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nivel'=>'nivel','Curso'=>'curso','Aula'=>'aula'),'items'=>$_smarty_tpl->tpl_vars['levels']->value), 0, false);
}
}
/* {/block "content"} */
}
