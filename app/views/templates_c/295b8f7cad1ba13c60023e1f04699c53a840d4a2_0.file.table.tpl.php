<?php
/* Smarty version 4.1.1, created on 2022-07-19 01:18:38
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/components/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d6066e21f667_58211442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '295b8f7cad1ba13c60023e1f04699c53a840d4a2' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/components/table.tpl',
      1 => 1658108077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d6066e21f667_58211442 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['items']->value) > 0) {?>
    <table class="table table-striped mt-5">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
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
                        <?php $_smarty_tpl->_assignInScope('properties', explode(".",$_smarty_tpl->tpl_vars['value']->value));?>
                        <?php $_smarty_tpl->_assignInScope('displayValue', $_smarty_tpl->tpl_vars['item']->value);?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['properties']->value, 'property');
$_smarty_tpl->tpl_vars['property']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['property']->value) {
$_smarty_tpl->tpl_vars['property']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('displayValue', $_smarty_tpl->tpl_vars['displayValue']->value[$_smarty_tpl->tpl_vars['property']->value]);?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <td><?php echo $_smarty_tpl->tpl_vars['displayValue']->value;?>
</td>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <td class="d-flex align-items-center gap-2 justify-content-end">
                        <button class="btn btn-sm btn-primary" data-table-action="edit" data-record='<?php echo json_encode($_smarty_tpl->tpl_vars['item']->value);?>
' data-record-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-bs-toggle="modal" data-bs-target="#editModal">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" data-table-action="delete" data-record-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php } else { ?>
    <h2 class="display-6 text-muted text-center h-100 d-flex align-items-center justify-content-center">No se han encontrado registros</h2>
<?php }
}
}
