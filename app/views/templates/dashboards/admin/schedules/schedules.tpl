{extends file='../../../layouts/dashboard_layout.tpl'}

{block name="title"}Horarios{/block}

{block name="createButtonText"}Crear horario{/block}

{block name="createFormContent"}
    {include './schedules_form.tpl'}
{/block}

{block name="editFormContent"}
    {include './schedules_form.tpl'}
{/block}

{block name="content"}
    {include '../../../components/content_header.tpl' title='Horarios' createButtonText='Crear horario'}
    {include '../../../components/Table.tpl'
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