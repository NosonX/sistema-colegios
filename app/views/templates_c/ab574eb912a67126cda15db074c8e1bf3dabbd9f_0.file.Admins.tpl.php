<?php
/* Smarty version 4.1.1, created on 2022-07-09 05:08:42
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/Admins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c90d5a8a72a2_66088160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab574eb912a67126cda15db074c8e1bf3dabbd9f' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/Admins.tpl',
      1 => 1657343285,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62c90d5a8a72a2_66088160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191539082062c90d5a89bb67_67091131', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39310032762c90d5a89d305_48550358', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111284514262c90d5a89e697_17049154', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158935400462c90d5a89f996_46921691', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_96867149462c90d5a8a0bf0_79574019', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/AdminPanelLayout.tpl');
}
/* {block "title"} */
class Block_191539082062c90d5a89bb67_67091131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_191539082062c90d5a89bb67_67091131',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Administradores<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_39310032762c90d5a89d305_48550358 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_39310032762c90d5a89d305_48550358',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear administrador<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_111284514262c90d5a89e697_17049154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_111284514262c90d5a89e697_17049154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="text" class="form-control" name="email" />
    </div>
    <div>
        <label for="login" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" name="login" />
    </div>
    <div>
        <label for="clave" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="clave" />
    </div>
<?php
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_158935400462c90d5a89f996_46921691 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_158935400462c90d5a89f996_46921691',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="text" class="form-control" name="email" readonly />
    </div>
    <div>
        <label for="login" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" name="login" />
    </div>
    <div>
        <label for="clave" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="clave" />
    </div>
<?php
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_96867149462c90d5a8a0bf0_79574019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_96867149462c90d5a8a0bf0_79574019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Email'=>'email','Nombre de Usuario'=>'login'),'items'=>$_smarty_tpl->tpl_vars['admins']->value), 0, false);
}
}
/* {/block "content"} */
}
