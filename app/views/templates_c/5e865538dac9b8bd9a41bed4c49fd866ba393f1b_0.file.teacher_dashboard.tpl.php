<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:28:24
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/teacher/teacher_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e578487fc867_17279673',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e865538dac9b8bd9a41bed4c49fd866ba393f1b' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/teacher/teacher_dashboard.tpl',
      1 => 1659201336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./teacher_menu.tpl' => 1,
    'file:../../components/content_header.tpl' => 1,
  ),
),false)) {
function content_62e578487fc867_17279673 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178133039562e578487f7f24_13500851', "sideBarContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39355661662e578487fb925_94321105', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/dashboard_layout.tpl');
}
/* {block "sideBarContent"} */
class Block_178133039562e578487f7f24_13500851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sideBarContent' => 
  array (
    0 => 'Block_178133039562e578487f7f24_13500851',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:./teacher_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block "sideBarContent"} */
/* {block "content"} */
class Block_39355661662e578487fb925_94321105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_39355661662e578487fb925_94321105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../components/content_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'Alumnos'), 0, false);
}
}
/* {/block "content"} */
}
