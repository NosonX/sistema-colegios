<?php
/* Smarty version 4.1.1, created on 2022-07-19 00:53:49
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/administrators/admins_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d6009de0e475_51076075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '981d4a05a05d5b46e2fc6c769d4c436d34218caf' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/administrators/admins_form.tpl',
      1 => 1658111385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d6009de0e475_51076075 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group mb-3">
    <label for="email" class="form-label">
        Correo electrónico
        <small class="text-muted"> (requerido)</small>
    </label>
    <input
            type="email"
            class="form-control"
            name="email"
            maxlength="255"
            required
            data-pristine-required-message="Correo electrónico requerido"
            data-pristine-email-message="El formato del email no es válido"
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
            maxlength="255"
            required
            data-pristine-required-message="Nombre de usuario requerido"
    />
</div>

<?php if (!(isset($_smarty_tpl->tpl_vars['isEditForm']->value)) || !$_smarty_tpl->tpl_vars['isEditForm']->value) {?>
    <div class="form-group mb-3">
        <label for="clave" class="form-label">
            Contraseña <small class="text-muted"> (requerido)</small>
        </label>
        <input
                id="pwd"
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
<?php }
}
}
