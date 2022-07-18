<?php
/* Smarty version 4.1.1, created on 2022-07-09 18:03:31
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/students.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c9c2f3141539_77828201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ccaf1aaebf76d357c2177ffdb16db6326a0ebbc' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/students.tpl',
      1 => 1657389809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62c9c2f3141539_77828201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143562009562c9c2f31255d2_72731521', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24209443362c9c2f3127277_96857774', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3781523962c9c2f31287c1_50973455', "createFormContent");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78057151862c9c2f3135632_70365285', "editFormContent");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163604323662c9c2f313a5f6_59603034', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/AdminPanelLayout.tpl');
}
/* {block "title"} */
class Block_143562009562c9c2f31255d2_72731521 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_143562009562c9c2f31255d2_72731521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Estudiantes<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_24209443362c9c2f3127277_96857774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_24209443362c9c2f3127277_96857774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear estudiante<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_3781523962c9c2f31287c1_50973455 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_3781523962c9c2f31287c1_50973455',
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
        <label for="login" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" name="login" />
    </div>
    <div>
        <label for="clave" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="clave" />
    </div>

    <div>
        <label for="nivel_id" class="form-label">Nivel</label>
        <select class="form-select" name="nivel_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['levels']->value, 'level');
$_smarty_tpl->tpl_vars['level']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['level']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['level']->value->nivel;?>
 /  <?php echo $_smarty_tpl->tpl_vars['level']->value->curso;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
<?php
}
}
/* {/block "createFormContent"} */
/* {block "editFormContent"} */
class Block_78057151862c9c2f3135632_70365285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_78057151862c9c2f3135632_70365285',
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
        <label for="login" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" name="login" />
    </div>
    <div>
        <label for="clave" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="clave" />
    </div>
    <div>
        <label for="nivel_id" class="form-label">Nivel</label>
        <select class="form-select" name="nivel_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['levels']->value, 'level');
$_smarty_tpl->tpl_vars['level']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['level']->value) {
$_smarty_tpl->tpl_vars['level']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['level']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['level']->value->nivel;?>
 / <?php echo $_smarty_tpl->tpl_vars['level']->value->curso;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
<?php
}
}
/* {/block "editFormContent"} */
/* {block "content"} */
class Block_163604323662c9c2f313a5f6_59603034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_163604323662c9c2f313a5f6_59603034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Apellidos'=>'apellidos','Nombre de Usuario'=>'login','Nivel'=>'level.nivel','Curso'=>'level.curso'),'items'=>$_smarty_tpl->tpl_vars['students']->value), 0, false);
}
}
/* {/block "content"} */
}
