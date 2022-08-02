<?php
/* Smarty version 4.1.1, created on 2022-07-30 18:28:24
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/menus/teacher_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62e57848807ed4_03986047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9f0a1e2ae90b5df46e011c8416f48009eaf6111' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/layouts/menus/teacher_menu.tpl',
      1 => 1659201224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./side_menu.tpl' => 1,
  ),
),false)) {
function content_62e57848807ed4_03986047 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:./side_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>array('Inicio'=>array('href'=>'','icon'=>'speedometer2'),'Estudiantes'=>array('href'=>'/alumnos','icon'=>'mortarboard'),'Niveles'=>array('href'=>'/niveles','icon'=>'123'),'Asignaturas'=>array('href'=>'/asignaturas','icon'=>'book'),'Horarios'=>array('href'=>'/horarios','icon'=>'clock'))), 0, false);
}
}
