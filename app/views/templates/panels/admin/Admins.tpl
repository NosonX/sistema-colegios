{extends file='../../layouts/AdminPanelLayout.tpl'}

{block name="title"}Administradores{/block}

{block name="createButtonText"}Crear administrador{/block}

{block name="createFormContent"}
    <div>
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="text" class="form-control" name="email" />
    </div>
    <div>
        <label for="login" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" name="login" />
    </div>
    <div>
        <label for="clave" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="clave" />
    </div>
{/block}

{block name="editFormContent"}
    <div>
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="text" class="form-control" name="email" readonly />
    </div>
    <div>
        <label for="login" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" name="login" />
    </div>
    <div>
        <label for="clave" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="clave" />
    </div>
{/block}

{block name="content"}
    {include '../../components/Table.tpl'
        headers=[
            'ID' => 'id',
            'Email' => 'email',
            'Nombre de Usuario' => 'login'
        ]
        items=$admins
    }
{/block}