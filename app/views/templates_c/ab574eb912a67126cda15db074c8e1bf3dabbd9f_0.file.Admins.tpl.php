<?php
/* Smarty version 4.1.1, created on 2022-07-16 17:54:59
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/admins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d2fb73a77248_60377215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab574eb912a67126cda15db074c8e1bf3dabbd9f' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/admins.tpl',
      1 => 1657994098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/table.tpl' => 1,
  ),
),false)) {
function content_62d2fb73a77248_60377215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59857250162d2fb73a69fa0_44084975', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124295338962d2fb73a6be43_37250912', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83449621262d2fb73a6d799_22782441', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92940303662d2fb73a6f091_56813496', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191592946162d2fb73a70858_05549731', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_59857250162d2fb73a69fa0_44084975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_59857250162d2fb73a69fa0_44084975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Administradores<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_124295338962d2fb73a6be43_37250912 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_124295338962d2fb73a6be43_37250912',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear administrador<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_83449621262d2fb73a6d799_22782441 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_83449621262d2fb73a6d799_22782441',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="form-group mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input
                type="email"
                class="form-control"
                name="email"
                maxlength="255"
                required
                data-pristine-required-message="Email requerido"
                data-pristine-email-message="El formato del email no es válido"
        />
    </div>
    <div class="form-group mb-3">
        <label for="login" class="form-label">Nombre de Usuario</label>
        <input
                type="text"
                class="form-control"
                name="login"
                maxlength="255"
                required
                data-pristine-required-message="Nombre de usuario requerido"
        />
    </div>
    <div class="form-group">
        <label for="clave" class="form-label">Contraseña</label>
        <input
                type="password"
                class="form-control"
                name="clave"
                minlength="8"
                data-pristine-minlength-message="La clave no debe tener menos de 8 caracteres"
                maxlength="100"
                data-pristine-maxlength-message="La clave no debe tener más de 100 caracteres"
                required
                data-pristine-required-message="Clave requerida"
        />
    </div>
<?php
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_92940303662d2fb73a6f091_56813496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_92940303662d2fb73a6f091_56813496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="form-group mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input
                type="email"
                class="form-control"
                name="email"
                maxlength="255"
                required
                data-pristine-required-message="Email requerido"
                data-pristine-email-message="El formato del email no es válido"
        />
    </div>
    <div class="form-group mb-3">
        <label for="login" class="form-label">Nombre de Usuario</label>
        <input
                type="text"
                class="form-control"
                name="login"
                maxlength="255"
                required
                data-pristine-required-message="Nombre de usuario requerido"
        />
    </div>
<?php
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_191592946162d2fb73a70858_05549731 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_191592946162d2fb73a70858_05549731',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Email'=>'email','Nombre de Usuario'=>'login'),'items'=>$_smarty_tpl->tpl_vars['admins']->value), 0, false);
}
}
/* {/block "content"} */
}
