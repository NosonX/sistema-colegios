<?php
/* Smarty version 4.1.1, created on 2022-07-02 18:51:41
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/AdminPanel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c093bdc30a48_28796828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2d28cd363cec848cf166b3e7f30819379ff4bf4' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/AdminPanel.tpl',
      1 => 1656787013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c093bdc30a48_28796828 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154067250762c093bdc2fb72_43359628', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../layouts/AdminPanelLayout.tpl');
}
/* {block "content"} */
class Block_154067250762c093bdc2fb72_43359628 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_154067250762c093bdc2fb72_43359628',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Dashboard</h1>
<?php
}
}
/* {/block "content"} */
}
