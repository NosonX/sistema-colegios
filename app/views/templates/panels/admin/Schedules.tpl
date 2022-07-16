{extends file='../../layouts/AdminPanelLayout.tpl'}


{block name="title"}Horarios{/block}
{block name="createButtonText"}Crear horario{/block}

{block name="createFormContent"}
    <div>
        <label for="dia" class="form-label">Día</label>
        <input type="date" class="form-control" name="dia" />
    </div>
    <div>
        <label for="horaInicio" class="form-label">Hora de Inicio</label>
        <input type="time" class="form-control" name="horaInicio" />
    </div>
    <div>
        <label for="horaFin" class="form-label">Hora de Finalización</label>
        <input type="time" class="form-control" name="horaFin" />
    </div>
    <div>
        <label for="asignatura_id" class="form-label">Nivel</label>
        <select class="form-select" name="asignatura_id">
            {foreach item=subject from=$subjects}
                <option value="{$subject.id}">{$subject.nombre} /  {$subject.level.nivel}</option>
            {/foreach}
        </select>
    </div>
{/block}

{block name="editFormContent"}
    <div>
        <label for="dia" class="form-label">Día</label>
        <input type="date" class="form-control" name="dia" />
    </div>
    <div>
        <label for="horaInicio" class="form-label">Hora de Inicio</label>
        <input type="time" class="form-control" name="horaInicio" />
    </div>
    <div>
        <label for="horaFin" class="form-label">Hora de Finalización</label>
        <input type="time" class="form-control" name="horaFin" />
    </div>
    <div>
        <label for="asignatura_id" class="form-label">Nivel</label>
        <select class="form-select" name="asignatura_id">
            {foreach item=subject from=$subjects}
                <option value="{$subject.id}">{$subject.nombre} /  {$subject.level.nivel}</option>
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
            'Hora de Finalización' => 'horaFin',
            'Asignatura' => 'subject.nombre',
            'Nivel' => 'subject.level.nivel'
        ]
        items=$schedules
    }
{/block}