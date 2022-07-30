<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:21:21
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/teachers/teachers_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e576a1d7ee31_84958849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eded28cd227a045b70845706614be2ad8804b902' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/teachers/teachers_form.tpl',
      1 => 1658686026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e576a1d7ee31_84958849 (Smarty_Internal_Template $_smarty_tpl) {
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
    <label for="email" class="form-label">
        Correo electrónico
        <small class="text-muted"> (requerido)</small>
    </label>
    <input
            type="text"
            class="form-control"
            name="email"
            maxlength="100"
            required
            data-pristine-required-message="Correo electrónico requerido"
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
            maxlength="100"
            required
            data-pristine-required-message="Nombre de Usuario requerido"
    />
</div>

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

<div class="form-group mb-3">
    <label for="especialista" class="form-label">Especialista</label>
    <input
            type="number"
            class="form-control"
            name="especialista"
    />
</div><?php }
}
