<?php
/* Smarty version 4.1.1, created on 2022-07-16 16:17:25
  from '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/components/AdminSideNav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_62d2e495b51cf3_38666262',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a77a75588bc134849d5bdb1a30a28e57b2f42284' => 
    array (
      0 => '/Applications/MAMP/htdocs/sistema-colegios/app/views/templates/components/AdminSideNav.tpl',
      1 => 1657988245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../components/Sidenav.tpl' => 1,
  ),
),false)) {
function content_62d2e495b51cf3_38666262 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:../components/Sidenav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>array('Inicio'=>array('href'=>($_smarty_tpl->tpl_vars['url']->value).('/admin'),'icon'=>'speedometer2'),'Administradores'=>array('href'=>($_smarty_tpl->tpl_vars['url']->value).('/admin/administradores'),'icon'=>'briefcase'),'Profesores'=>array('href'=>($_smarty_tpl->tpl_vars['url']->value).('/admin/profesores'),'icon'=>'person'),'Estudiantes'=>array('href'=>($_smarty_tpl->tpl_vars['url']->value).('/admin/estudiantes'),'icon'=>'mortarboard'),'Niveles'=>array('href'=>($_smarty_tpl->tpl_vars['url']->value).('/admin/niveles'),'icon'=>'123'),'Asignaturas'=>array('href'=>($_smarty_tpl->tpl_vars['url']->value).('/admin/asignaturas'),'icon'=>'book'),'Horarios'=>array('href'=>($_smarty_tpl->tpl_vars['url']->value).('/admin/horarios'),'icon'=>'clock'))), 0, false);
}
}
