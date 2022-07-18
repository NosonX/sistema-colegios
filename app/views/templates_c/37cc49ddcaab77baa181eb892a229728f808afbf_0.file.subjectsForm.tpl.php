<?php
/* Smarty version 4.1.1, created on 2022-07-18 01:32:21
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/subjects/subjectsForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d4b825c1b2e5_83838434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37cc49ddcaab77baa181eb892a229728f808afbf' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/panels/admin/subjects/subjectsForm.tpl',
      1 => 1658107575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d4b825c1b2e5_83838434 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" />
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
</div>
<div>
    <label for="profesor_id" class="form-label">Profesor</label>
    <select class="form-select" name="profesor_id">
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
