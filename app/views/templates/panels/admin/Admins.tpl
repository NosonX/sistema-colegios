{extends file='../../layouts/AdminPanelLayout.tpl'}

{block name="title"}Administradores{/block}

{block name="createButtonText"}Crear administrador{/block}

{block name="createFormAction"}#{/block}

{block name="createFormContent"}
    <div>
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="text" class="form-control" name="email" />
    </div>
    <div>
        <label for="clave" class="form-label">Contraseña</label>
        <input type="text" class="form-control" name="clave" />
    </div>
{/block}

{block name="content"}
    {include '../../components/Table.tpl'
        headers=[
            'ID' => 'id',
            'Email' => 'email',
            'Clave' => 'clave'
        ]
        items=$admins
    }
{/block}