<?php
/* Smarty version 4.1.1, created on 2022-07-18 01:32:48
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/schedules/schedulesForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d4b840a4ecd8_04073697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b730f9916078ec09655900d65bf57005e073c34' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/schedules/schedulesForm.tpl',
      1 => 1658107520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d4b840a4ecd8_04073697 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
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
</div><?php }
}
