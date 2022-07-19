<div class="form-group mb-3">
    <label for="email" class="form-label">
        Correo electrónico
        <small class="text-muted"> (requerido)</small>
    </label>
    <input
            type="email"
            class="form-control"
            name="email"
            maxlength="255"
            required
            data-pristine-required-message="Correo electrónico requerido"
            data-pristine-email-message="El formato del email no es válido"
    />
</div>
<div class="form-group mb-3">
    <label for="login" class="form-label">
        Nombre de Usuario
        <small class="text-muted"> (requerido)</small>
    </label>
    <input
            type="text"
            class="form-control"
            name="login"
            maxlength="255"
            required
            data-pristine-required-message="Nombre de usuario requerido"
    />
</div>

{if !isset($isEditForm) || !$isEditForm}
    <div class="form-group mb-3">
        <label for="clave" class="form-label">
            Contraseña <small class="text-muted"> (requerido)</small>
        </label>
        <input
                id="pwd"
                type="password"
                class="form-control"
                name="clave"
                minlength="8"
                maxlength="100"
                required
                data-pristine-minlength-message="La clave no debe tener menos de 8 caracteres"
                data-pristine-maxlength-message="La clave no debe tener más de 100 caracteres"
                data-pristine-required-message="Contraseña requerida"
        />
    </div>
{/if}