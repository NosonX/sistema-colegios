{include '../../components/side_menu.tpl'
    items=[
        'Estudiantes' => [ 'href' => $url|cat:'/profesor/alumnos', 'icon' => 'mortarboard' ],
        'Niveles' => [ 'href' => $url|cat:'/profesor/niveles', 'icon' => '123' ],
        'Asignaturas' => [ 'href' => $url|cat:'/profesor/asignaturas', 'icon' => 'book' ],
        'Horarios' => [ 'href' => $url|cat:'/profesor/horarios', 'icon' => 'clock' ]
    ]
}