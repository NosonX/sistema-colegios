{include '../../components/side_menu.tpl'
    items=[
        'Inicio' => [ 'href' => $url|cat:'/admin', 'icon' => 'speedometer2' ],
        'Administradores' => [ 'href' => $url|cat:'/admin/administradores', 'icon' => 'briefcase' ],
        'Profesores' => [ 'href' => $url|cat:'/admin/profesores', 'icon' => 'person' ],
        'Estudiantes' => [ 'href' => $url|cat:'/admin/estudiantes', 'icon' => 'mortarboard' ],
        'Niveles' => [ 'href' => $url|cat:'/admin/niveles', 'icon' => '123' ],
        'Asignaturas' => [ 'href' => $url|cat:'/admin/asignaturas', 'icon' => 'book' ],
        'Horarios' => [ 'href' => $url|cat:'/admin/horarios', 'icon' => 'clock' ]
    ]
}