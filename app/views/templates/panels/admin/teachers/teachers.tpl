{extends file='../../../layouts/AdminPanelLayout.tpl'}

{block name="title"}Profesores{/block}

{block name="createButtonText"}Crear Profesor{/block}

{block name="createFormContent"}
    {include './teachersForm.tpl'}
{/block}

{block name="editFormContent"}
    {include './teachersForm.tpl'}
{/block}

{block name="content"}
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