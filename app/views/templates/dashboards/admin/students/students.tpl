{extends file='../../../layouts/dashboard_layout.tpl'}

{block name="createFormContent"}
    {include './students_form.tpl'}
{/block}

{block name="editFormContent"}
    {include './students_form.tpl' isEditForm=true}
{/block}

{block name="content"}
    {include '../../../components/content_header.tpl' title='Estudantes' createButtonText='Crear estudiante'}
    {include '../../../components/Table.tpl'
        headers=[
            'ID' => 'id',
            'Nombre' => 'nombre',
            'Apellidos' => 'apellidos',
            'Nombre de Usuario' => 'login',
            'Nivel' => 'level.nivel',
            'Curso' => 'level.curso'
        ]
        items=$students
    }
{/block}