<?php
/* Smarty version 4.1.1, created on 2022-07-16 03:10:22
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/Schedules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d22c1e1c2b93_16594324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3edc084c4bf1d0aad791947b3a59b3cddcd712da' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/Schedules.tpl',
      1 => 1657940825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/Table.tpl' => 1,
  ),
),false)) {
function content_62d22c1e1c2b93_16594324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41728778262d22c1e1a6701_25548011', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_65448541762d22c1e1a8511_66132360', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98250109462d22c1e1a9b83_48819288', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17407964962d22c1e1b7e94_60487674', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125504414462d22c1e1bcc04_95549370', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/AdminPanelLayout.tpl');
}
/* {block "title"} */
class Block_41728778262d22c1e1a6701_25548011 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_41728778262d22c1e1a6701_25548011',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Horarios<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_65448541762d22c1e1a8511_66132360 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_65448541762d22c1e1a8511_66132360',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear horario<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_98250109462d22c1e1a9b83_48819288 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_98250109462d22c1e1a9b83_48819288',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="dia" class="form-label">Día</label>
        <input type="date" class="form-control" name="dia" />
    </div>
    <div>
        <label for="horaInicio" class="form-label">Hora de Inicio</label>
        <input type="time" class="form-control" name="horaInicio" />
    </div>
    <div>
        <label for="horaFin" class="form-label">Hora de Finalización</label>
        <input type="time" class="form-control" name="horaFin" />
    </div>
    <div>
        <label for="asignatura_id" class="form-label">Nivel</label>
        <select class="form-select" name="asignatura_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subjects']->value, 'subject');
$_smarty_tpl->tpl_vars['subject']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
$_smarty_tpl->tpl_vars['subject']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['subject']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value['nombre'];?>
 /  <?php echo $_smarty_tpl->tpl_vars['subject']->value['level']['nivel'];?>
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
class Block_17407964962d22c1e1b7e94_60487674 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_17407964962d22c1e1b7e94_60487674',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div>
        <label for="dia" class="form-label">Día</label>
        <input type="date" class="form-control" name="dia" />
    </div>
    <div>
        <label for="horaInicio" class="form-label">Hora de Inicio</label>
        <input type="time" class="form-control" name="horaInicio" />
    </div>
    <div>
        <label for="horaFin" class="form-label">Hora de Finalización</label>
        <input type="time" class="form-control" name="horaFin" />
    </div>
    <div>
        <label for="asignatura_id" class="form-label">Nivel</label>
        <select class="form-select" name="asignatura_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subjects']->value, 'subject');
$_smarty_tpl->tpl_vars['subject']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
$_smarty_tpl->tpl_vars['subject']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['subject']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value['nombre'];?>
 /  <?php echo $_smarty_tpl->tpl_vars['subject']->value['level']['nivel'];?>
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
class Block_125504414462d22c1e1bcc04_95549370 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_125504414462d22c1e1bcc04_95549370',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../components/Table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Día'=>'dia','Hora de Inicio'=>'horaInicio','Hora de Finalización'=>'horaFin','Asignatura'=>'subject.nombre','Nivel'=>'subject.level.nivel'),'items'=>$_smarty_tpl->tpl_vars['schedules']->value), 0, false);
}
}
/* {/block "content"} */
}
