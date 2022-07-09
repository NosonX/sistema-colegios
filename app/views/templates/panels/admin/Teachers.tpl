{extends file='../../layouts/AdminPanelLayout.tpl'}


{block name="title"}Profesores{/block}
{block name="createButtonText"}Crear Profesor{/block}

{block name="createFormContent"}
    <div>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" />
    </div>
    <div>
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" />
    </div>
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
    <div>
        <label for="especialista" class="form-label">Especialista</label>
        <input type="number" class="form-control" name="especialista" />
    </div>
{/block}


{block name="editFormContent"}
    <div>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" />
    </div>
    <div>
        <label for="apellidos" class="form-label">Apellidos</label>
        <input type="text" class="form-control" name="apellidos" />
    </div>
    <div>
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="text" class="form-control" name="email" readonly />
    </div>
    <div>
        <label for="login" class="form-label">Nombre de Usuario</label>
        <input type="text" class="form-control" name="login" />
    </div>
    <div>
        <label for="especialista" class="form-label">Especialista</label>
        <input type="number" class="form-control" name="especialista" />
    </div>
{/block}


{block name="content"}
    {include '../../components/Table.tpl'
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