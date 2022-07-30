<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:19:19
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/administrators/admins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e576271dc6e2_18848833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2d3eaeb367d84762deab5236adf83f89476219' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/administrators/admins.tpl',
      1 => 1659205158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./admins_form.tpl' => 2,
    'file:../../../components/content_header.tpl' => 1,
    'file:../../../components/table.tpl' => 1,
  ),
),false)) {
function content_62e576271dc6e2_18848833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45328845062e576271cf069_55773749', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214729496762e576271d1550_25984023', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55838152062e576271d2748_41685574', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95411871562e576271d65d6_04657661', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1884326562e576271d8341_74379400', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../../layouts/dashboard_layout.tpl');
}
/* {block 'title'} */
class Block_45328845062e576271cf069_55773749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_45328845062e576271cf069_55773749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Administradores<?php
}
}
/* {/block 'title'} */
/* {block "createButtonText"} */
class Block_214729496762e576271d1550_25984023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_214729496762e576271d1550_25984023',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear administrador<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_55838152062e576271d2748_41685574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_55838152062e576271d2748_41685574',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./admins_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_95411871562e576271d65d6_04657661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_95411871562e576271d65d6_04657661',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./admins_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('isEditForm'=>true), 0, true);
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_1884326562e576271d8341_74379400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1884326562e576271d8341_74379400',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/content_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Administradores','createButtonText'=>'Crear administrador'), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Email'=>'email','Nombre de Usuario'=>'login'),'items'=>$_smarty_tpl->tpl_vars['admins']->value), 0, false);
}
}
/* {/block "content"} */
}
