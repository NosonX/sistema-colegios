{if count($items) > 0}
    <table class="table table-striped mt-5">
        <thead>
            {foreach item=item key=key from=$headers}
                <th>{$key}</th>
            {/foreach}
            <th class="text-end">Acciones</th>
        </thead>
        <tbody>
            {foreach item=item from=$items}
                <tr>
                    {foreach item=value from=$headers}
                        <td>{$item->$value}</td>
                    {/foreach}
                    <td class="d-flex align-items-center gap-2 justify-content-end">
                        <button class="btn btn-sm btn-primary" data-table-action="edit" data-record='{json_encode($item)}' data-record-id="{$item->id}" data-bs-toggle="modal" data-bs-target="#editModal">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" data-table-action="delete" data-record-id="{$item->id}" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="bi bi-trash"></i>
                        </button>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{else}
    <h2 class="display-6 text-muted text-center h-100 d-flex align-items-center justify-content-center">No se han encontrado registros</h2>
{/if}