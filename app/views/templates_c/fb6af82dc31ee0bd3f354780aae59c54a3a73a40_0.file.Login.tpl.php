<?php
/* Smarty version 4.1.1, created on 2022-07-16 15:09:39
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d2d4b3ebb8b4_77252629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb6af82dc31ee0bd3f354780aae59c54a3a73a40' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/login.tpl',
      1 => 1657984179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/header.tpl' => 1,
    'file:modules/footer.tpl' => 1,
  ),
),false)) {
function content_62d2d4b3ebb8b4_77252629 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:modules/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="vh-100 vw-100 d-flex align-items-center justify-content-center">
    <form class="bg-white col-4 p-4 rounded-1 d-flex flex-column shadow-lg" action="./login" method="post">
        <h1 class="display-6 text-center">Iniciar sesión</h1>
        <hr/>
        <div class="input-group my-3">
            <span class="input-group-text">
                <i class="bi bi-envelope"></i>
            </span>
            <input type="text" class="form-control" placeholder="Correo electrónico" name="email" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">
                <i class="bi bi-key"></i>
            </span>
            <input type="password" class="form-control" placeholder="Contraseña" name="clave" required>
        </div>

        <button type="submit" class="btn btn-primary mb-3 mt-3">Ingresar</button>
        <a href="./recuperar-contrasena" class="btn btn-link mb-3">Recuperar contraseña</a>
    </form>
</main>

<?php $_smarty_tpl->_subTemplateRender('file:modules/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
