{extends file='../../../layouts/AdminPanelLayout.tpl'}

{block name="title"}Estudiantes{/block}

{block name="createButtonText"}Crear estudiante{/block}

{block name="createFormContent"}
    {include './studentsForm.tpl'}
{/block}

{block name="editFormContent"}
    {include './studentsForm.tpl' isEditForm=true}
{/block}

{block name="content"}
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