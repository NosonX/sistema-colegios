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
            {block name="content"}{/block}
        </div>
    </div>
</div>


{include '../modules/Footer.tpl'}