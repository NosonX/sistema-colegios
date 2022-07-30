{extends file='../../../layouts/dashboard_layout.tpl'}

{*{block name="title"}Profesores{/block}*}

{*{block name="createButtonText"}Crear Profesor{/block}*}

{block name="createFormContent"}
    {include './teachers_form.tpl'}
{/block}

{block name="editFormContent"}
    {include './teachers_form.tpl'}
{/block}

{block name="content"}
    {include '../../../components/content_header.tpl' title='Profesores' createButtonText='Crear profesor'}
    {include '../../../components/Table.tpl'
        headers=[
            'ID' => 'id',
            'Nombre' => 'nombre',
            'Apellidos' => 'apellidos',
            'Email' => 'email',
            'Nombre de Usuario' => 'login',
            'Especialista' => 'especialista'
        ]
        items=$teachers
    }
{/block}