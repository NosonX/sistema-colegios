{extends file='../../layouts/AdminPanelLayout.tpl'}

{block name="content"}
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="display-6">Profesores</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAdminModal">
            <i class="bi bi-plus-lg"></i>
            Nuevo profesor
        </button>
    </div>
{/block}