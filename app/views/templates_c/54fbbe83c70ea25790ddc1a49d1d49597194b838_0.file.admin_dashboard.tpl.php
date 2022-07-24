<?php
/* Smarty version 4.1.1, created on 2022-07-19 01:16:35
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/admin_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d605f3921c52_90470108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54fbbe83c70ea25790ddc1a49d1d49597194b838' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/admin_dashboard.tpl',
      1 => 1658193390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d605f3921c52_90470108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195948776562d605f3920855_72269748', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/admin_layout.tpl');
}
/* {block "content"} */
class Block_195948776562d605f3920855_72269748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_195948776562d605f3920855_72269748',
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
