<?php
/* Smarty version 4.1.1, created on 2022-07-05 02:06:27
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/Levels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c39ca35bb992_06730553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '702a037a9d4a2d601f3c631e05315367c0955a1a' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/Levels.tpl',
      1 => 1656986786,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62c39ca35bb992_06730553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189259654662c39ca35ad993_65825613', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66930332562c39ca35afbe4_36558239', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93982907262c39ca35b1343_88874499', "createFormAction");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73525281962c39ca35b2c67_97852274', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53810096762c39ca35b39c2_08782308', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/AdminPanelLayout.tpl');
}
/* {block "title"} */
class Block_189259654662c39ca35ad993_65825613 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_189259654662c39ca35ad993_65825613',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Niveles<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_66930332562c39ca35afbe4_36558239 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_66930332562c39ca35afbe4_36558239',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear nivel<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormAction"} */
class Block_93982907262c39ca35b1343_88874499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormAction' => 
  array (
    0 => 'Block_93982907262c39ca35b1343_88874499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
#<?php
}
}
/* {/block "createFormAction"} */
/* {block "createFormContent"} */
class Block_73525281962c39ca35b2c67_97852274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_73525281962c39ca35b2c67_97852274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="nivel" class="form-label">Nivel</label>
        <input type="text" class="form-control" name="nivel" />
    </div>
    <div>
        <label for="curso" class="form-label">Curso</label>
        <input type="text" class="form-control" name="curso" />
    </div>
    <div>
        <label for="aula" class="form-label">Aula</label>
        <input type="text" class="form-control" name="aula" />
    </div>
<?php
}
}
/* {/block "createFormContent"} */
/* {block "content"} */
class Block_53810096762c39ca35b39c2_08782308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_53810096762c39ca35b39c2_08782308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nivel'=>'nivel','Curso'=>'curso','Aula'=>'aula'),'items'=>$_smarty_tpl->tpl_vars['levels']->value), 0, false);
}
}
/* {/block "content"} */
}
