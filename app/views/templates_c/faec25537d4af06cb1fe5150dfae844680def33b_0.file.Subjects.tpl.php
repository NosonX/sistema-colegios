<?php
/* Smarty version 4.1.1, created on 2022-07-12 01:30:38
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/subjects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62cccebe6cf509_04946193',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'faec25537d4af06cb1fe5150dfae844680def33b' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/subjects.tpl',
      1 => 1657589436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/table.tpl' => 1,
  ),
),false)) {
function content_62cccebe6cf509_04946193 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53372587662cccebe6b6bc2_76255037', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95724351862cccebe6b7ce5_22859655', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97098191662cccebe6b8973_52997281', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107741460362cccebe6c5135_06094983', "editFormContent");
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31976458762cccebe6ca5e3_34024635', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_53372587662cccebe6b6bc2_76255037 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_53372587662cccebe6b6bc2_76255037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Asignaturas<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_95724351862cccebe6b7ce5_22859655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_95724351862cccebe6b7ce5_22859655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear asignatura<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_97098191662cccebe6b8973_52997281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_97098191662cccebe6b8973_52997281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" />
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
    <div>
        <label for="profesor_id" class="form-label">Profesor</label>
        <select class="form-select" name="profesor_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teachers']->value, 'teacher');
$_smarty_tpl->tpl_vars['teacher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->value) {
$_smarty_tpl->tpl_vars['teacher']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['teacher']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['teacher']->value->apellidos;?>
 <?php echo $_smarty_tpl->tpl_vars['teacher']->value->nombre;?>
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
class Block_107741460362cccebe6c5135_06094983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_107741460362cccebe6c5135_06094983',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" />
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
    <div>
        <label for="profesor_id" class="form-label">Profesor</label>
        <select class="form-select" name="profesor_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teachers']->value, 'teacher');
$_smarty_tpl->tpl_vars['teacher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['teacher']->value) {
$_smarty_tpl->tpl_vars['teacher']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['teacher']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['teacher']->value->apellidos;?>
 <?php echo $_smarty_tpl->tpl_vars['teacher']->value->nombre;?>
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
class Block_31976458762cccebe6ca5e3_34024635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_31976458762cccebe6ca5e3_34024635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Nombre'=>'nombre','Nivel'=>'level.nivel','Curso'=>'level.curso','Profesor - Apellidos'=>'teacher.apellidos','Profesor - Nombre'=>'teacher.nombre'),'items'=>$_smarty_tpl->tpl_vars['subjects']->value), 0, false);
}
}
/* {/block "content"} */
}
