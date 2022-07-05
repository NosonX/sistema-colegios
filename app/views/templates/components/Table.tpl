<table class="table table-striped mt-5">
    <thead>
        {foreach item=item key=key from=$headers}
            <th>{$key}</th>
        {/foreach}
        <th class="text-end">Acciones</th>
    </thead>
    <tbody>
        {foreach item=item from=$admins}
            <tr>
                {foreach item=value from=$headers}
                    <td>{$item->$value}</td>
                {/foreach}
                <td class="d-flex align-items-center gap-2 justify-content-end">
                    <button type="submit" class="btn btn-sm btn-primary" data-record-id="{$item->id}">
                        <i class="bi bi-pencil"></i>
                    </button>
                    <button type="submit" class="btn btn-sm btn-danger" data-record-id="{$item->id}">
                        <i class="bi bi-trash"></i>
                    </button>
                    {*<form action="{$url}/admin/administradores/eliminar/{$admin->id}" method="post">
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>*}
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>