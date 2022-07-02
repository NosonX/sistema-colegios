<?php
/* Smarty version 4.1.1, created on 2022-07-02 18:16:58
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/components/Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c08b9a27e242_27595681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fc97ad7e0b6a40bb3b55639b13d4fffa657689d' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/components/Login.tpl',
      1 => 1656778225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c08b9a27e242_27595681 (Smarty_Internal_Template $_smarty_tpl) {
?><form class="bg-white col-4 p-4 rounded-1 d-flex flex-column shadow-lg" action="./login" method="post">
    <h1 class="display-6 text-center">Iniciar sesión</h1>
    <hr/>
    <div class="input-group my-3">
            <span class="input-group-text">
                <i class="bi bi-envelope"></i>
            </span>
        <input type="text" class="form-control" placeholder="Correo electrónico" name="email">
    </div>

    <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-key"></i>
            </span>
        <input type="password" class="form-control" placeholder="Contraseña" name="password">
    </div>

    <button type="submit" class="btn btn-primary mb-3 mt-3">Ingresar</button>
    <a href="./recuperar-contrasena" class="btn btn-link mb-3">Recuperar contraseña</a>
</form><?php }
}
