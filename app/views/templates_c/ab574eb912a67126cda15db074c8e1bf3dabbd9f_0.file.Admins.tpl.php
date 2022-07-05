<?php
/* Smarty version 4.1.1, created on 2022-07-05 01:17:05
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/Admins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c391111a9e86_99982997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab574eb912a67126cda15db074c8e1bf3dabbd9f' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/Admins.tpl',
      1 => 1656983824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62c391111a9e86_99982997 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84307029562c3911119f599_32981061', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135186960462c391111a0de0_44141751', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184879809262c391111a1cd2_21444248', "createFormAction");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93941788762c391111a2828_52123281', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136245113062c391111a3412_89459948', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/AdminPanelLayout.tpl');
}
/* {block "title"} */
class Block_84307029562c3911119f599_32981061 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_84307029562c3911119f599_32981061',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Administradores<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_135186960462c391111a0de0_44141751 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_135186960462c391111a0de0_44141751',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear administrador<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormAction"} */
class Block_184879809262c391111a1cd2_21444248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormAction' => 
  array (
    0 => 'Block_184879809262c391111a1cd2_21444248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
#<?php
}
}
/* {/block "createFormAction"} */
/* {block "createFormContent"} */
class Block_93941788762c391111a2828_52123281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_93941788762c391111a2828_52123281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="text" class="form-control" name="email" />
    </div>
    <div>
        <label for="password" class="form-label">Contraseña</label>
        <input type="text" class="form-control" name="password" />
    </div>
<?php
}
}
/* {/block "createFormContent"} */
/* {block "content"} */
class Block_136245113062c391111a3412_89459948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_136245113062c391111a3412_89459948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Email'=>'email','Clave'=>'clave'),'items'=>$_smarty_tpl->tpl_vars['admins']->value), 0, false);
}
}
/* {/block "content"} */
}
