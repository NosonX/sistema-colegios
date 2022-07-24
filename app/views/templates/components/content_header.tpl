<div class="d-flex justify-content-between align-items-center">
    <h1 class="display-6 text-primary">{$title}</h1>
    {if isset($createButtonText) && $createButtonText != ''}
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
            <i class="bi bi-plus-lg"></i>
            {$createButtonText}
        </button>
    {/if}
</div>