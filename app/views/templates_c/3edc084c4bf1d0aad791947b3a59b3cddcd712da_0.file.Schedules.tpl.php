<?php
/* Smarty version 4.1.1, created on 2022-07-16 16:03:54
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/schedules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d2e16a4af239_47357106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3edc084c4bf1d0aad791947b3a59b3cddcd712da' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/schedules.tpl',
      1 => 1657987433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/table.tpl' => 1,
  ),
),false)) {
function content_62d2e16a4af239_47357106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176047939962d2e16a4926f3_29969891', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27947608662d2e16a494d38_90436952', "createButtonText");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13350969162d2e16a4963f1_93202332', "createFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135597753362d2e16a4a39c9_56268858', "editFormContent");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110509892662d2e16a4a7ca5_81906232', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../layouts/admin_layout.tpl');
}
/* {block "title"} */
class Block_176047939962d2e16a4926f3_29969891 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_176047939962d2e16a4926f3_29969891',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Horarios<?php
}
}
/* {/block "title"} */
/* {block "createButtonText"} */
class Block_27947608662d2e16a494d38_90436952 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createButtonText' => 
  array (
    0 => 'Block_27947608662d2e16a494d38_90436952',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Crear horario<?php
}
}
/* {/block "createButtonText"} */
/* {block "createFormContent"} */
class Block_13350969162d2e16a4963f1_93202332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'createFormContent' => 
  array (
    0 => 'Block_13350969162d2e16a4963f1_93202332',
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
class Block_135597753362d2e16a4a39c9_56268858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'editFormContent' => 
  array (
    0 => 'Block_135597753362d2e16a4a39c9_56268858',
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
class Block_110509892662d2e16a4a7ca5_81906232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_110509892662d2e16a4a7ca5_81906232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:../../components/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('headers'=>array('ID'=>'id','Día'=>'dia','Hora de Inicio'=>'horaInicio','Hora de Finalización'=>'horaFin','Asignatura'=>'subject.nombre','Nivel'=>'subject.level.nivel'),'items'=>$_smarty_tpl->tpl_vars['schedules']->value), 0, false);
}
}
/* {/block "content"} */
}
