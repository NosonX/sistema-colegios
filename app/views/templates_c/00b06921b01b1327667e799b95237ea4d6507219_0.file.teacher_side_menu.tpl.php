<?php
/* Smarty version 4.1.1, created on 2022-07-19 03:14:24
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/teacher/teacher_side_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d62190497714_45401052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00b06921b01b1327667e799b95237ea4d6507219' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/teacher/teacher_side_menu.tpl',
      1 => 1658200446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/side_menu.tpl' => 1,
  ),
),false)) {
function content_62d62190497714_45401052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../../components/side_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>array('Estudiantes'=>array('href'=>($_smarty_tpl->tpl_vars['url']->value).('/profesor/alumnos'),'icon'=>'mortarboard'),'Niveles'=>array('href'=>($_smarty_tpl->tpl_vars['url']->value).('/profesor/niveles'),'icon'=>'123'),'Asignaturas'=>array('href'=>($_smarty_tpl->tpl_vars['url']->value).('/profesor/asignaturas'),'icon'=>'book'),'Horarios'=>array('href'=>($_smarty_tpl->tpl_vars['url']->value).('/profesor/horarios'),'icon'=>'clock'))), 0, false);
}
}
