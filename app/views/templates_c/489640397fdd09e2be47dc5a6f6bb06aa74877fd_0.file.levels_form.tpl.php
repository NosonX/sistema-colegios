<?php
/* Smarty version 4.1.1, created on 2022-07-19 01:18:39
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/levels/levels_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d6066fc72bc1_15755143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '489640397fdd09e2be47dc5a6f6bb06aa74877fd' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/levels/levels_form.tpl',
      1 => 1658110900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d6066fc72bc1_15755143 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group mb-3">
    <label for="nivel" class="form-label">Nivel <small class="text-muted">(requerido)</small></label>
    <input
            type="text"
            class="form-control"
            name="nivel"
            maxlength="45"
            required
            data-pristine-required-message="Nivel requerido"
            data-pristine-maxlength-message="El nivel no debe tener más de 45 caracteres"
    />
</div>

<div class="form-group mb-3">
    <label for="curso" class="form-label">Nombre del curso <small class="text-muted">(requerido)</small></label>
    <input
            type="text"
            class="form-control"
            name="curso"
            maxlength="45"
            required
            data-pristine-required-message="Nombre del curso requerido"
            data-pristine-maxlength-message="El nombre del curso no debe tener más de 45 caracteres"
    />
</div>

<div class="form-group mb-3">
    <label for="aula" class="form-label">Aula <small class="text-muted">(requerido)</small></label>
    <input
            type="text"
            class="form-control"
            name="aula"
            maxlength="45"
            required
            data-pristine-required-message="Aula requerida"
            data-pristine-maxlength-message="El aula no debe tener más de 45 caracteres"
    />
</div><?php }
}
