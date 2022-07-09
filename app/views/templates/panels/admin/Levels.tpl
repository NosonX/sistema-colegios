{extends file='../../layouts/AdminPanelLayout.tpl'}

{block name="title"}Niveles{/block}
{block name="createButtonText"}Crear nivel{/block}

{block name="createFormContent"}
    <div>
        <label for="nivel" class="form-label">Nivel</label>
        <input type="text" class="form-control" name="nivel" required />
    </div>
    <div>
        <label for="curso" class="form-label">Curso</label>
        <input type="text" class="form-control" name="curso" required />
    </div>
    <div>
        <label for="aula" class="form-label">Aula</label>
        <input type="text" class="form-control" name="aula" required />
    </div>
{/block}

{block name="editFormContent"}
    <div>
        <label for="nivel" class="form-label">Nivel</label>
        <input type="text" class="form-control" name="nivel" required />
    </div>
    <div>
        <label for="curso" class="form-label">Curso</label>
        <input type="text" class="form-control" name="curso" required />
    </div>
    <div>
        <label for="aula" class="form-label">Aula</label>
        <input type="text" class="form-control" name="aula" required />
    </div>
{/block}

{block name="content"}
    {include '../../components/Table.tpl'
        headers=[
            'ID' => 'id',
            'Nivel' => 'nivel',
            'Curso' => 'curso',
            'Aula' => 'aula'
        ]
        items=$levels
    }
{/block}
