{include '../modules/Header.tpl'}

<div class="container-fluid">
    <div class="row vh-100 overflow-hidden">
        <aside class="col-2 bg-white shadow-lg d-flex flex-column justify-content-between py-3">
            <div>
                <h1 class="mt-2">Logo</h1>
                <hr />
                {include '../components/AdminSideNav.tpl'}
            </div>

            <a href="./logout" class="btn btn-outline-danger">
                Salir
                <i class="bi bi-box-arrow-right ms-2"></i>
            </a>
        </aside>

        <div class="col-10 overflow-hidden p-5">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="display-6">{block name="title"}{/block}</h1>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                    <i class="bi bi-plus-lg"></i>
                    {block name="createButtonText"}{/block}
                </button>
            </div>

            {block name="content"}{/block}


            {*    MODAL: CREATE    *}
            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">Crear nuevo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="createForm" action="{block name="createFormAction"}#{/block}" method="post">
                                {block name="createFormContent"}{/block}
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button form="createForm" type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </div>
                </div>
            </div>

            {*    MODAL: EDIT    *}
            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Editar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="editForm" action="{block name="editFormAction"}{/block}" method="post">
                                {block name="editFormContent"}{/block}
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button form="editForm" type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>

            {*    MODAL: DELETE    *}
            <div class="modal fade" id="deleteModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">Eliminar</div>
                        <div class="modal-body">
                            ¿Seguro que desea eliminar el registro?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <form id="deleteForm" action="" method="post">
                                <button type="submit" class="btn btn-danger">Confirmar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


{include '../modules/Footer.tpl'}