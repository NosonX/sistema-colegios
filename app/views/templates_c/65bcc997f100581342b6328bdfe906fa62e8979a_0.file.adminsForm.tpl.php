<?php
/* Smarty version 4.1.1, created on 2022-07-18 01:19:03
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/administrators/adminsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d4b507b1ac48_17860578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65bcc997f100581342b6328bdfe906fa62e8979a' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/administrators/adminsForm.tpl',
      1 => 1658107142,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d4b507b1ac48_17860578 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group mb-3">
    <label for="email" class="form-label">Correo electrónico</label>
    <input
            type="email"
            class="form-control"
            name="email"
            maxlength="255"
            required
            data-pristine-required-message="Email requerido"
            data-pristine-email-message="El formato del email no es válido"
    />
</div>
<div class="form-group mb-3">
    <label for="login" class="form-label">Nombre de Usuario</label>
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
    <div class="form-group">
        <label for="clave" class="form-label">Contraseña</label>
        <input
                type="password"
                class="form-control"
                name="clave"
                minlength="8"
                data-pristine-minlength-message="La clave no debe tener menos de 8 caracteres"
                maxlength="100"
                data-pristine-maxlength-message="La clave no debe tener más de 100 caracteres"
                required
                data-pristine-required-message="Clave requerida"
        />
    </div>
<?php }
}
}
