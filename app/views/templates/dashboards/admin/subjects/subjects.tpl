{extends file='../../../layouts/dashboard_layout.tpl'}

{block name="title"}Asignaturas{/block}

{block name="createButtonText"}Crear asignatura{/block}

{block name="createFormContent"}
    {include './subjects_form.tpl'}
{/block}

{block name="editFormContent"}
    {include './subjects_form.tpl'}
{/block}

{block name="content"}
    {include '../../../components/content_header.tpl' title='Asignaturas' createButtonText='Crear asignatura'}
    {include '../../../components/Table.tpl'
        headers=[
            'ID' => 'id',
            'Nombre' => 'nombre',
            'Nivel' => 'level.nivel',
            'Curso' => 'level.curso',
            'Profesor - Apellidos' => 'teacher.apellidos',
            'Profesor - Nombre' => 'teacher.nombre'
        ]
        items=$subjects
    }
{/block}