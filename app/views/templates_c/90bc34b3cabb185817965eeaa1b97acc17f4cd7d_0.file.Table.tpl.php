<?php
/* Smarty version 4.1.1, created on 2022-07-05 01:03:28
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/components/Table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c38de03ba171_06628615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90bc34b3cabb185817965eeaa1b97acc17f4cd7d' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/components/Table.tpl',
      1 => 1656983007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c38de03ba171_06628615 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table table-striped mt-5">
    <thead>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['headers']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <th><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</th>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <th class="text-end">Acciones</th>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admins']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['headers']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value->{$_smarty_tpl->tpl_vars['value']->value};?>
</td>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <td class="d-flex align-items-center gap-2 justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary" data-record-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">
                        <i class="bi bi-pencil"></i>
                    </button>
                    <button type="submit" class="btn btn-sm btn-danger" data-record-id="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
">
                        <i class="bi bi-trash"></i>
                    </button>
                                    </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table><?php }
}
