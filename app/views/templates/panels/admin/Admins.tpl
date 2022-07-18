{extends file='../../layouts/AdminPanelLayout.tpl'}

{block name="title"}Administradores{/block}

{block name="createButtonText"}Crear administrador{/block}

{block name="createFormContent"}
    <div class="form-group mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input
                type="email"
                class="form-control"
                name="email"
                maxlength="255"
                required
                data-pristine-required-message="Email requerido"
                data-pristine-email-message="El formato del email no es válido"
        />
    </div>
    <div class="form-group mb-3">
        <label for="login" class="form-label">Nombre de Usuario</label>
        <input
                type="text"
                class="form-control"
                name="login"
                maxlength="255"
                required
                data-pristine-required-message="Nombre de usuario requerido"
        />
    </div>
    <div class="form-group">
        <label for="clave" class="form-label">Contraseña</label>
        <input
                type="password"
                class="form-control"
                name="clave"
                minlength="8"
                data-pristine-minlength-message="La clave no debe tener menos de 8 caracteres"
                maxlength="100"
                data-pristine-maxlength-message="La clave no debe tener más de 100 caracteres"
                required
                data-pristine-required-message="Clave requerida"
        />
    </div>
{/block}

{block name="editFormContent"}
    <div class="form-group mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input
                type="email"
                class="form-control"
                name="email"
                maxlength="255"
                required
                data-pristine-required-message="Email requerido"
                data-pristine-email-message="El formato del email no es válido"
        />
    </div>
    <div class="form-group mb-3">
        <label for="login" class="form-label">Nombre de Usuario</label>
        <input
                type="text"
                class="form-control"
                name="login"
                maxlength="255"
                required
                data-pristine-required-message="Nombre de usuario requerido"
        />
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