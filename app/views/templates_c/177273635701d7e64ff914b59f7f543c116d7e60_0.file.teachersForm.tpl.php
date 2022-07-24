<?php
/* Smarty version 4.1.1, created on 2022-07-18 01:30:58
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/teachers/teachers_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d4b7d22ffe25_97387730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '177273635701d7e64ff914b59f7f543c116d7e60' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/teachers/teachers_form.tpl',
      1 => 1658107643,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d4b7d22ffe25_97387730 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" />
</div>
<div>
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" />
</div>
<div>
    <label for="email" class="form-label">Correo electrónico</label>
    <input type="text" class="form-control" name="email" />
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
    <label for="especialista" class="form-label">Especialista</label>
    <input type="number" class="form-control" name="especialista" />
</div><?php }
}
