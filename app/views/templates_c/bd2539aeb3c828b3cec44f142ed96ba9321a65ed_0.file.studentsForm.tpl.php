<?php
/* Smarty version 4.1.1, created on 2022-07-18 01:31:14
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/students/studentsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d4b7e2957bd8_01482258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd2539aeb3c828b3cec44f142ed96ba9321a65ed' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/students/studentsForm.tpl',
      1 => 1658107448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d4b7e2957bd8_01482258 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" />
</div>

<div>
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" />
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
    <label for="nivel_id" class="form-label">Nivel</label>
    <select class="form-select" name="nivel_id">
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
</div><?php }
}
