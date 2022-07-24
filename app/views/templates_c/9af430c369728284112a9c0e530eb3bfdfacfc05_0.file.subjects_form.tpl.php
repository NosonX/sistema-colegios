<?php
/* Smarty version 4.1.1, created on 2022-07-19 01:18:40
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/subjects/subjects_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d606703b6cb0_64884233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9af430c369728284112a9c0e530eb3bfdfacfc05' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/subjects/subjects_form.tpl',
      1 => 1658190478,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d606703b6cb0_64884233 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group mb-3">
    <label for="nombre" class="form-label">
        Nombre
        <small class="text-muted"> (requerido)</small>
    </label>
    <input
            type="text"
            class="form-control"
            name="nombre"
            required
    />
</div>

<div class="form-group mb-3">
    <label for="nivel_id" class="form-label">
        Nivel
        <small class="text-muted"> (requerido)</small>
    </label>
    <select
            class="form-select"
            name="nivel_id"
            required
    >
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

<div class="form-group mb-3">
    <label for="profesor_id" class="form-label">
        Profesor
        <small class="text-muted"> (requerido)</small>
    </label>
    <select
            class="form-select"
            name="profesor_id"
            required
    >
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
</div><?php }
}
