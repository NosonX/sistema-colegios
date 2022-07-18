{extends file='../../../layouts/AdminPanelLayout.tpl'}

{block name="title"}Administradores{/block}

{block name="createButtonText"}Crear administrador{/block}

{block name="createFormContent"}
    {include './adminsForm.tpl'}
{/block}

{block name="editFormContent"}
    {include './adminsForm.tpl' isEditForm=true}
{/block}

{block name="content"}
    {include '../../../components/Table.tpl'
        headers=[
            'ID' => 'id',
            'Email' => 'email',
            'Nombre de Usuario' => 'login'
        ]
        items=$admins
    }
{/block}