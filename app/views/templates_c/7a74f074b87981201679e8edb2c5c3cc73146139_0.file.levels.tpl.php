<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:25:06
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/levels/levels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e57782eef291_10102519',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a74f074b87981201679e8edb2c5c3cc73146139' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/levels/levels.tpl',
      1 => 1659205505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./levels_form.tpl' => 2,
    'file:../../../components/content_header.tpl' => 1,
    'file:../../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62e57782eef291_10102519 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211066733162e57782ee1479_75268242', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61949270962e57782ee2bc6_21782119', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161637218962e57782ee3f14_35775600', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187252824762e57782ee8485_84062421', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18876774962e57782eea0f7_84941356', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/dashboard_layout.tpl');
}
/* {block "title"} */
class Block_211066733162e57782ee1479_75268242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_211066733162e57782ee1479_75268242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Niveles<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_61949270962e57782ee2bc6_21782119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_61949270962e57782ee2bc6_21782119',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear nivel<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_161637218962e57782ee3f14_35775600 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_161637218962e57782ee3f14_35775600',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./levels_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_187252824762e57782ee8485_84062421 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_187252824762e57782ee8485_84062421',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./levels_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_18876774962e57782eea0f7_84941356 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18876774962e57782eea0f7_84941356',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/content_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Niveles','createButtonText'=>'Crear nivel'), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nivel'=>'nivel','Curso'=>'curso','Aula'=>'aula'),'items'=>$_smarty_tpl->tpl_vars['levels']->value), 0, false);
}
}
/* {/block "content"} */
}
