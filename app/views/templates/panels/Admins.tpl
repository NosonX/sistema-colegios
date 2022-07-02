{extends file='../layouts/AdminPanelLayout.tpl'}

{block name="content"}
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="display-6">Administradores</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAdminModal">
            <i class="bi bi-plus"></i>
            Nuevo administrador
        </button>
    </div>

    <div class="modal fade" id="createAdminModal" tabindex="-1" aria-labelledby="createAdminModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createAdminModalLabel">Crear nuevo administrador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="createForm" action="#" method="post">
                        <div>
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input type="text" class="form-control" name="email" />
                        </div>
                        <div>
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="text" class="form-control" name="password" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button form="createForm" type="submit" class="btn btn-primary">Crear</button>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-striped mt-5">
        <thead>
            <th>ID</th>
            <th>Email</th>
            <th>Clave</th>
            <th class="text-end">Acciones</th>
        </thead>
        <tbody>
            {foreach item=admin from=$admins}
                <tr>
                    <td>{$admin->id}</td>
                    <td>{$admin->email}</td>
                    <td>{$admin->clave}</td>
                    <td class="d-flex align-items-center gap-2 justify-content-end">
                        <button type="submit" class="btn btn-sm btn-primary">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <form action="{$url}/admin/administradores/eliminar/{$admin->id}" method="post">
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
{/block}