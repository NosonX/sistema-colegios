{extends file='../../layouts/AdminPanelLayout.tpl'}


{block name="title"}Asignaturas{/block}
{block name="createButtonText"}Crear asignatura{/block}

{block name="createFormContent"}
    <div>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" />
    </div>
    <div>
        <label for="nivel_id" class="form-label">Nivel</label>
        <select class="form-select" name="nivel_id">
            {foreach item=level from=$levels}
                <option value="{$level->id}">{$level->nivel} /  {$level->curso}</option>
            {/foreach}
        </select>
    </div>
    <div>
        <label for="profesor_id" class="form-label">Profesor</label>
        <select class="form-select" name="profesor_id">
            {foreach item=teacher from=$teachers}
                <option value="{$teacher->id}">{$teacher->apellidos} {$teacher->nombre}</option>
            {/foreach}
        </select>
    </div>
{/block}

{block name="editFormContent"}
    <div>
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" />
    </div>
    <div>
        <label for="nivel_id" class="form-label">Nivel</label>
        <select class="form-select" name="nivel_id">
            {foreach item=level from=$levels}
                <option value="{$level->id}">{$level->nivel} /  {$level->curso}</option>
            {/foreach}
        </select>
    </div>
    <div>
        <label for="profesor_id" class="form-label">Profesor</label>
        <select class="form-select" name="profesor_id">
            {foreach item=teacher from=$teachers}
                <option value="{$teacher->id}">{$teacher->apellidos} {$teacher->nombre}</option>
            {/foreach}
        </select>
    </div>
{/block}


{block name="content"}
    {include '../../components/Table.tpl'
        headers=[
            'ID' => 'id',
            'Nombre' => 'nombre',
            'Nivel' => 'level.nivel',
            'Curso' => 'level.curso',
            'Profesor - Apellidos' => 'teacher.apellidos',
            'Profesor - Nombre' => 'teacher.nombre'
        ]
        items=$subjects
    }
{/block}