<?php
/* Smarty version 4.1.1, created on 2022-07-05 02:29:31
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/Admins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c3a20bb212f9_35199013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab574eb912a67126cda15db074c8e1bf3dabbd9f' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/Admins.tpl',
      1 => 1656988164,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62c3a20bb212f9_35199013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204376260862c3a20bb15738_81956249', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136381662862c3a20bb16ad5_39160027', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7089739662c3a20bb17a92_53383312', "createFormAction");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62822338762c3a20bb18a83_83199031', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159157778662c3a20bb19987_63312231', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/AdminPanelLayout.tpl');
}
/* {block "title"} */
class Block_204376260862c3a20bb15738_81956249 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_204376260862c3a20bb15738_81956249',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Administradores<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_136381662862c3a20bb16ad5_39160027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_136381662862c3a20bb16ad5_39160027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear administrador<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormAction"} */
class Block_7089739662c3a20bb17a92_53383312 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormAction' => 
  array (
    0 => 'Block_7089739662c3a20bb17a92_53383312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
#<?php
}
}
/* {/block "createFormAction"} */
/* {block "createFormContent"} */
class Block_62822338762c3a20bb18a83_83199031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_62822338762c3a20bb18a83_83199031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="text" class="form-control" name="email" />
    </div>
    <div>
        <label for="clave" class="form-label">Contraseña</label>
        <input type="text" class="form-control" name="clave" />
    </div>
<?php
}
}
/* {/block "createFormContent"} */
/* {block "content"} */
class Block_159157778662c3a20bb19987_63312231 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_159157778662c3a20bb19987_63312231',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Email'=>'email','Clave'=>'clave'),'items'=>$_smarty_tpl->tpl_vars['admins']->value), 0, false);
}
}
/* {/block "content"} */
}
