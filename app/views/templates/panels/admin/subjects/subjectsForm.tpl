<div class="form-group mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input
            type="text"
            class="form-control"
            name="nombre"
    />
</div>

<div class="form-group mb-3">
    <label for="nivel_id" class="form-label">Nivel</label>
    <select class="form-select" name="nivel_id">
        {foreach item=level from=$levels}
            <option value="{$level->id}">{$level->nivel} /  {$level->curso}</option>
        {/foreach}
    </select>
</div>

<div class="form-group mb-3">
    <label for="profesor_id" class="form-label">Profesor</label>
    <select class="form-select" name="profesor_id">
        {foreach item=teacher from=$teachers}
            <option value="{$teacher->id}">{$teacher->apellidos} {$teacher->nombre}</option>
        {/foreach}
    </select>
</div>