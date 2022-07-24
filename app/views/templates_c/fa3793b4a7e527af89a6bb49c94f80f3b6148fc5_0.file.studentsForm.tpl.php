<?php
/* Smarty version 4.1.1, created on 2022-07-19 00:56:55
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/students/students_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d60157688669_00346925',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa3793b4a7e527af89a6bb49c94f80f3b6148fc5' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/students/students_form.tpl',
      1 => 1658111321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d60157688669_00346925 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group mb-3">
    <label for="nombre" class="form-label">
        Nombre
        <small class="text-muted"> (requerido)</small>
    </label>
    <input
            type="text"
            class="form-control"
            name="nombre"
            maxlength="100"
            required
            data-pristine-required-message="Nombre requerido"
    />
</div>

<div class="form-group mb-3">
    <label for="apellidos" class="form-label">
        Apellidos
        <small class="text-muted"> (requerido)</small>
    </label>
    <input
            type="text"
            class="form-control"
            name="apellidos"
            maxlength="100"
            required
            data-pristine-required-message="Apellidos requeridos"
    />
</div>

<div class="form-group mb-3">
    <label for="login" class="form-label">
        Nombre de Usuario
        <small class="text-muted"> (requerido)</small>
    </label>
    <input
            type="text"
            class="form-control"
            name="login"
            required
            data-pristine-required-message="Nombre de Usuario requerido"
    />
</div>

<?php if (!(isset($_smarty_tpl->tpl_vars['isEditForm']->value)) || !$_smarty_tpl->tpl_vars['isEditForm']->value) {?>
    <div class="form-group mb-3">
        <label for="clave" class="form-label">
            Contraseña
            <small class="text-muted"> (requerido)</small>
        </label>
        <input
                type="password"
                class="form-control"
                name="clave"
                minlength="8"
                maxlength="100"
                required
                data-pristine-minlength-message="La clave no debe tener menos de 8 caracteres"
                data-pristine-maxlength-message="La clave no debe tener más de 100 caracteres"
                data-pristine-required-message="Contraseña requerida"
        />
    </div>
<?php }?>

<div class="form-group mb-3">
    <label for="nivel_id" class="form-label">
        Nivel
        <small class="text-muted"> (requerido)</small>
    </label>
    <select
            class="form-select" name="nivel_id"
            required
            data-pristine-required-message="Nivel requerido"
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
<?php }
}
