{extends file='../../../layouts/dashboard_layout.tpl'}


{block name="title"}Niveles{/block}
{block name="createButtonText"}Crear nivel{/block}

{block name="createFormContent"}
    {include './levels_form.tpl'}
{/block}

{block name="editFormContent"}
    {include './levels_form.tpl'}
{/block}

{block name="content"}
    {include '../../../components/content_header.tpl' title='Niveles' createButtonText='Crear nivel'}
    {include '../../../components/Table.tpl'
        headers=[
            'ID' => 'id',
            'Nivel' => 'nivel',
            'Curso' => 'curso',
            'Aula' => 'aula'
        ]
        items=$levels
    }
{/block}
