<div>
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" />
</div>

<div>
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellidos" />
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
    <label for="nivel_id" class="form-label">Nivel</label>
    <select class="form-select" name="nivel_id">
        {foreach item=level from=$levels}
            <option value="{$level->id}">{$level->nivel} /  {$level->curso}</option>
        {/foreach}
    </select>
</div>