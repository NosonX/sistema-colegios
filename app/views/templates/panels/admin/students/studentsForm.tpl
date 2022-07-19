<div class="form-group mb-3">
    <label for="nombre" class="form-label">
        Nombre
        <small class="text-muted"> (requerido)</small>
    </label>
    <input
            type="text"
            class="form-control"
            name="nombre"
            maxlength="100"
            required
            data-pristine-required-message="Nombre requerido"
    />
</div>

<div class="form-group mb-3">
    <label for="apellidos" class="form-label">
        Apellidos
        <small class="text-muted"> (requerido)</small>
    </label>
    <input
            type="text"
            class="form-control"
            name="apellidos"
            maxlength="100"
            required
            data-pristine-required-message="Apellidos requeridos"
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
            required
            data-pristine-required-message="Nombre de Usuario requerido"
    />
</div>

{if !isset($isEditForm) || !$isEditForm}
    <div class="form-group mb-3">
        <label for="clave" class="form-label">
            Contraseña
            <small class="text-muted"> (requerido)</small>
        </label>
        <input
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

<div class="form-group mb-3">
    <label for="nivel_id" class="form-label">
        Nivel
        <small class="text-muted"> (requerido)</small>
    </label>
    <select
            class="form-select" name="nivel_id"
            required
            data-pristine-required-message="Nivel requerido"
    >
        {foreach item=level from=$levels}
            <option value="{$level->id}">{$level->nivel} /  {$level->curso}</option>
        {/foreach}
    </select>
</div>
