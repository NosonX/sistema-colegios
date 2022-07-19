<?php
/* Smarty version 4.1.1, created on 2022-07-19 00:53:49
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/administrators/admins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d6009ddf6a69_76989688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2d3eaeb367d84762deab5236adf83f89476219' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/administrators/admins.tpl',
      1 => 1658108077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./admins_form.tpl' => 2,
    'file:../../../components/table.tpl' => 1,
  ),
),false)) {
function content_62d6009ddf6a69_76989688 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25047580062d6009dde52f4_06178572', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82928267362d6009dde7392_88909362', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191912979462d6009dde89d6_72363678', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6222635462d6009ddef545_16269639', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117439341362d6009ddf1bd2_27548901', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_25047580062d6009dde52f4_06178572 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_25047580062d6009dde52f4_06178572',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Administradores<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_82928267362d6009dde7392_88909362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_82928267362d6009dde7392_88909362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear administrador<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_191912979462d6009dde89d6_72363678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_191912979462d6009dde89d6_72363678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./admins_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_6222635462d6009ddef545_16269639 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_6222635462d6009ddef545_16269639',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./admins_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isEditForm'=>true), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_117439341362d6009ddf1bd2_27548901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_117439341362d6009ddf1bd2_27548901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Email'=>'email','Nombre de Usuario'=>'login'),'items'=>$_smarty_tpl->tpl_vars['admins']->value), 0, false);
}
}
/* {/block "content"} */
}
