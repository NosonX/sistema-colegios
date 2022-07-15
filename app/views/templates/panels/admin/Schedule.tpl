{extends file='../../layouts/AdminPanelLayout.tpl'}


{block name="title"}Horarios{/block}
{block name="createButtonText"}Crear horario{/block}

{block name="createFormContent"}
    <div>
        <label for="dia" class="form-label">Día</label>
        <input type="text" class="form-control" name="dia" />
    </div>
    <div>
        <label for="horaInicio" class="form-label">Hora de Inicio</label>
        <input type="text" class="form-control" name="horaInicio" />
    </div>
    <div>
        <label for="horaFin" class="form-label">Hora de Salida</label>
        <input type="text" class="form-control" name="horaFin" />
    </div>
    <div>
        <label for="asignatura_id" class="form-label">Asignatura</label>
        <select class="form-select" name="asignatura_id">
            {foreach item=level from=$levels}
                <option value="{$level->id}">{$level->nivel} /  {$level->curso}</option>
            {/foreach}
        </select>
    </div>
{/block}


{block name="editFormContent"}
    <div>
        <label for="dia" class="form-label">Día</label>
        <input type="text" class="form-control" name="dia" />
    </div>
    <div>
        <label for="horaInicio" class="form-label">Hora de Inicio</label>
        <input type="text" class="form-control" name="horaInicio" />
    </div>
    <div>
        <label for="horaFin" class="form-label">Hora de Salida</label>
        <input type="text" class="form-control" name="horaFin" />
    </div>
    <div>
        <label for="asignatura_id" class="form-label">Asignatura</label>
        <select class="form-select" name="asignatura_id">
            {foreach item=level from=$levels}
                <option value="{$level->id}">{$level->nivel} </option>
            {/foreach}
        </select>
    </div>
{/block}


{block name="content"}
    {include '../../components/Table.tpl'
        headers=[
            'ID' => 'id',
            'Día' => 'dia',
            'Hora de Inicio' => 'horaInicio',
            'Hora de Salida' => 'horaFin',
            'Asignatura' => 'level.nivel',
        ]
        items=$students
    }
{/block}