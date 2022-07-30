<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:16:04
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/menus/side_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e57564ad9278_44451793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73483b219d21db3f6bcc3a64c969bc3350d0abf5' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/menus/side_menu.tpl',
      1 => 1659201848,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e57564ad9278_44451793 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="nav nav-pills flex-column">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <li class="nav-item">
            <a href="<?php echo ((($_smarty_tpl->tpl_vars['url']->value).('/')).($_smarty_tpl->tpl_vars['role']->value)).($_smarty_tpl->tpl_vars['item']->value['href']);?>
" class="nav-link <?php if ((($_smarty_tpl->tpl_vars['url']->value).('/')).($_smarty_tpl->tpl_vars['uri']->value) === ((($_smarty_tpl->tpl_vars['url']->value).('/')).($_smarty_tpl->tpl_vars['role']->value)).($_smarty_tpl->tpl_vars['item']->value['href'])) {?>active<?php }?>">
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
