<?php
/* Smarty version 4.1.1, created on 2022-07-02 18:31:30
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/components/Sidenav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62c08f0267b746_33781227',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09533aee195b675a54283791614455590abf4c56' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/components/Sidenav.tpl',
      1 => 1656786686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c08f0267b746_33781227 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="nav nav-pills flex-column">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <li class="nav-item">
            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['href'];?>
" class="nav-link <?php if ((($_smarty_tpl->tpl_vars['url']->value).("/")).($_smarty_tpl->tpl_vars['uri']->value) === $_smarty_tpl->tpl_vars['item']->value['href']) {?>active<?php }?>">
                <i class="bi bi-<?php echo $_smarty_tpl->tpl_vars['item']->value['icon'];?>
 me-2"></i>
                <?php echo $_smarty_tpl->tpl_vars['key']->value;?>

            </a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</nav><?php }
}
