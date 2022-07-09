<?php
/* Smarty version 4.1.1, created on 2022-07-09 05:24:36
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/Teachers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c91114143988_88513422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbaed31c1ea3be4cdebb0059b85669ea5015cb3e' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/Teachers.tpl',
      1 => 1657343716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62c91114143988_88513422 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_89890138562c91114134bf1_23067753', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16263832762c911141366a6_64235510', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121385299962c91114137ca6_40967530', "createFormContent");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113947364662c91114139305_74628522', "editFormContent");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210684564162c9111413a8c2_90899721', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/AdminPanelLayout.tpl');
}
/* {block "title"} */
class Block_89890138562c91114134bf1_23067753 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_89890138562c91114134bf1_23067753',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Profesores<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_16263832762c911141366a6_64235510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_16263832762c911141366a6_64235510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear Profesor<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_121385299962c91114137ca6_40967530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_121385299962c91114137ca6_40967530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" />
    </div>
    <div>
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" />
    </div>
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
    <div>
        <label for="especialista" class="form-label">Especialista</label>
        <input type="number" class="form-control" name="especialista" />
    </div>
<?php
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_113947364662c91114139305_74628522 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_113947364662c91114139305_74628522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" />
    </div>
    <div>
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" />
    </div>
    <div>
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="text" class="form-control" name="email" readonly />
    </div>
    <div>
        <label for="login" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" name="login" />
    </div>
    <div>
        <label for="especialista" class="form-label">Especialista</label>
        <input type="number" class="form-control" name="especialista" />
    </div>
<?php
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_210684564162c9111413a8c2_90899721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_210684564162c9111413a8c2_90899721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Apellidos'=>'apellidos','Email'=>'email','Nombre de Usuario'=>'login','Especialista'=>'especialista'),'items'=>$_smarty_tpl->tpl_vars['teachers']->value), 0, false);
}
}
/* {/block "content"} */
}
