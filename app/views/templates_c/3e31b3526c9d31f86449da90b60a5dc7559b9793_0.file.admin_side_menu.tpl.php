<?php
/* Smarty version 4.1.1, created on 2022-07-24 18:38:48
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/admin_side_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62dd91b84891f8_73935177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e31b3526c9d31f86449da90b60a5dc7559b9793' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/dashboards/admin/admin_side_menu.tpl',
      1 => 1658687927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../components/side_menu.tpl' => 1,
  ),
),false)) {
function content_62dd91b84891f8_73935177 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../../components/side_menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>array('Inicio'=>array('href'=>'','icon'=>'speedometer2'),'Administradores'=>array('href'=>'/administradores','icon'=>'briefcase'),'Profesores'=>array('href'=>'/profesores','icon'=>'person'),'Estudiantes'=>array('href'=>'/estudiantes','icon'=>'mortarboard'),'Niveles'=>array('href'=>'/niveles','icon'=>'123'),'Asignaturas'=>array('href'=>'/asignaturas','icon'=>'book'),'Horarios'=>array('href'=>'/horarios','icon'=>'clock'))), 0, false);
}
}
