{include '../modules/Header.tpl'}

<div class="container-fluid">
    <div class="row vh-100 overflow-hidden">
        <aside class="col-2 bg-white shadow-lg d-flex flex-column justify-content-between py-3">
            <div>
                <div class="text-center">
                    <img src="{$publicDir}/assets/images/logo.svg" alt="Bundi Logo">
                </div>
                <hr />
                {block name="sideBarContent"}{/block}
            </div>

            <a href="{$url}/logout" class="btn btn-outline-danger">
                Salir
                <i class="bi bi-box-arrow-right ms-2"></i>
            </a>
        </aside>

        <div class="col-10 overflow-hidden p-5">
            <div class="mb-2">
                <small class="text-uppercase text-secondary">Panel de {$role}</small>
            </div>
            {block name="content"}{/block}
        </div>
    </div>
</div>


{include '../modules/Footer.tpl'}