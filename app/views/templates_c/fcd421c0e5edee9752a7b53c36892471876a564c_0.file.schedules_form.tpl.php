<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:26:37
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/schedules/schedules_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e577dd610175_80882640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd421c0e5edee9752a7b53c36892471876a564c' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/schedules/schedules_form.tpl',
      1 => 1658686026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e577dd610175_80882640 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group mb-3">
    <label for="dia" class="form-label">Día <small class="text-muted">(requerido)</small></label>
    <input
            type="date"
            class="form-control"
            name="dia"
            required
            data-pristine-required-message="Día requerida"
    />
</div>

<div class="form-group mb-3">
    <label for="horaInicio" class="form-label">Hora de Inicio <small class="text-muted">(requerido)</small></label>
    <input
            type="time"
            class="form-control"
            name="horaInicio"
            required
            data-pristine-required-message="Hora de Inicio requerida"
    />
</div>

<div class="form-group mb-3">
    <label for="horaFin" class="form-label">Hora de Finalización <small class="text-muted">(requerido)</small></label>
    <input
            type="time"
            class="form-control"
            name="horaFin"
            required
            data-pristine-required-message="Hora de Finalización requerida"
    />
</div>

<div class="form-group mb-3">
    <label for="asignatura_id" class="form-label">Nivel <small class="text-muted">(requerido)</small></label>
    <select
            class="form-select"
            name="asignatura_id"
            required
            data-pristine-required-message="Nivel requerido"
    >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subjects']->value, 'subject');
$_smarty_tpl->tpl_vars['subject']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subject']->value) {
$_smarty_tpl->tpl_vars['subject']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['subject']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['subject']->value['nombre'];?>
 / <?php echo $_smarty_tpl->tpl_vars['subject']->value['level']['nivel'];?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
</div><?php }
}
