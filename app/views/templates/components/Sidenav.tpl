<nav class="nav nav-pills flex-column">
    {foreach key=key item=item from=$items}
        <li class="nav-item">
            <a href="{$item['href']}" class="nav-link {if $url|cat:"/"|cat:$uri === $item['href']}active{/if}">
                <i class="bi bi-{$item['icon']} me-2"></i>
                {$key}
            </a>
        </li>
    {/foreach}
</nav>