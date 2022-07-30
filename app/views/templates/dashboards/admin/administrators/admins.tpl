{extends file='../../../layouts/dashboard_layout.tpl'}

{block name='title'}Administradores{/block}
{block name="createButtonText"}Crear administrador{/block}

{block name="createFormContent"}
    {include './admins_form.tpl'}
{/block}

{block name="editFormContent"}
    {include './admins_form.tpl' isEditForm=true}
{/block}

{block name="content"}
    {include '../../../components/content_header.tpl' title='Administradores' createButtonText='Crear administrador'}

    {include '../../../components/table.tpl'
        headers=[
            'ID' => 'id',
            'Email' => 'email',
            'Nombre de Usuario' => 'login'
        ]
        items=$admins
    }
{/block}