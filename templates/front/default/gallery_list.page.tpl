{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<aside class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li class="active">{$title}</li>
    </ol>
</aside>

<section class="col-lg-12 col-md-12 col-xs-12">

    {foreach $items as $item}

    <article  class="col-lg-4 col-md-6 col-xs-12">
        <div class="thumbnail">

        {if $item.type == 2}

            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="//www.youtube.com/embed/{$item.file}?hd=1&rel=0" allowfullscreen></iframe>
            </div>
            <div class="caption">
                <h3>{$item.title}</h3>
                <p><span class="label label-default">{$item.datetime}</span></p>
                <p>{$item.descr}</p>
            </div>

        {else}

            <div class="embed-responsive embed-responsive-4by3">
                <a href="/{$gallery_list_url}/{$item.url}" class="img-thumbnail thumb-div" >
                    <img class="img-responsive thumb-img" src="/images/{$item.thumb}"  alt="{$item.title}">
                </a>
            </div>
            <div class="caption">
                <a href="/{$gallery_list_url}/{$item.url}"><h3>{$item.title}</h3></a>
                <p><span class="label label-default">{$item.datetime}</span></p>
                <p>{$item.descr}</p>
            </div>

        {/if}

        </div>
    </article>

    {/foreach}

</section>

{if isset($Page)}

<section class="col-lg-12 col-md-12 col-xs-12">
    <nav>
        <ul class="pagination">

            {if isset($Prev_Page)}

            <li>
                <a href="/{$gallery_list_url}/{$Prev_Page}" aria-label="Пред.">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            {/if}

            {foreach $pag_urls as $pag_url}

                {if $pag_url == $Page}

                <li class='active'><a href='#'>{$pag_url}</a></li>

                {else}

                <li><a href="/{$gallery_list_url}/{$pag_url}">{$pag_url}</a></li>

                {/if}

            {/foreach}

            {if isset($Next_Page)}

                <li>
                    <a href="/{$gallery_list_url}/{$Next_Page}" aria-label="След.">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>

            {/if}

        </ul>
    </nav>
</section>

{/if}

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}