{extends file='../../../layouts/admin_layout.tpl'}

{block name="title"}Asignaturas{/block}

{block name="createButtonText"}Crear asignatura{/block}

{block name="createFormContent"}
    {include './subjectsForm.tpl'}
{/block}

{block name="editFormContent"}
    {include './subjectsForm.tpl'}
{/block}

{block name="content"}
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