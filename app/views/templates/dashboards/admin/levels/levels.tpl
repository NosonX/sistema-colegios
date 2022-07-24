{extends file='../../../layouts/admin_layout.tpl'}

{block name="title"}Niveles{/block}
{block name="createButtonText"}Crear nivel{/block}

{block name="createFormContent"}
    {include './levelsForm.tpl'}
{/block}

{block name="editFormContent"}
    {include './levelsForm.tpl'}
{/block}

{block name="content"}
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
