<?php
/* Smarty version 4.1.1, created on 2022-07-19 00:53:48
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/admin_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d6009c732955_47069300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44a372e4c7a7db9ff15ba13a26eb3165ac5e7c65' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/admin_dashboard.tpl',
      1 => 1657382340,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d6009c732955_47069300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72660633962d6009c731117_49875912', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/admin_layout.tpl');
}
/* {block "content"} */
class Block_72660633962d6009c731117_49875912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_72660633962d6009c731117_49875912',
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
