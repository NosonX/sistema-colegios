{extends file='../../../layouts/admin_layout.tpl'}

{block name="title"}Horarios{/block}

{block name="createButtonText"}Crear horario{/block}

{block name="createFormContent"}
    {include './schedulesForm.tpl'}
{/block}

{block name="editFormContent"}
    {include './schedulesForm.tpl'}
{/block}

{block name="content"}
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