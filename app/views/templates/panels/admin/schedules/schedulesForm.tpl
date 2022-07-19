<div class="form-group mb-3">
    <label for="dia" class="form-label">Día <small class="text-muted">(requerido)</small></label>
    <input
            type="date"
            class="form-control"
            name="dia"
            required
            data-pristine-required-message="Día requerida"
    />
</div>

<div class="form-group mb-3">
    <label for="horaInicio" class="form-label">Hora de Inicio <small class="text-muted">(requerido)</small></label>
    <input
            type="time"
            class="form-control"
            name="horaInicio"
            required
            data-pristine-required-message="Hora de Inicio requerida"
    />
</div>

<div class="form-group mb-3">
    <label for="horaFin" class="form-label">Hora de Finalización <small class="text-muted">(requerido)</small></label>
    <input
            type="time"
            class="form-control"
            name="horaFin"
            required
            data-pristine-required-message="Hora de Finalización requerida"
    />
</div>

<div class="form-group mb-3">
    <label for="asignatura_id" class="form-label">Nivel <small class="text-muted">(requerido)</small></label>
    <select
            class="form-select"
            name="asignatura_id"
            required
            data-pristine-required-message="Nivel requerido"
    >
        {foreach item=subject from=$subjects}
            <option value="{$subject.id}">{$subject.nombre} / {$subject.level.nivel}</option>
        {/foreach}
    </select>
</div>