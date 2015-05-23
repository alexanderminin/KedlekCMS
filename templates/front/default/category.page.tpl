{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<aside class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li class="active">{$title}</li>
    </ol>
</aside>

<section>

    {foreach $records as $record}

    <article class="col-lg-12 col-md-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">{$record.title}</div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12"> {$record.descr}</div>
                </div>
            </div>
            <div class="panel-footer">{$record.datetime} <a href="/{$category_url}/{$record.url}">Подробнее</a></div>
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
                <a href="/{$category_url}/{$Prev_Page}" aria-label="Пред.">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            {/if}

            {foreach $pag_urls as $pag_url}

                {if $pag_url == $Page}

                <li class='active'><a href='#'>{$pag_url}</a></li>

                {else}

                <li><a href="/{$category_url}/{$pag_url}">{$pag_url}</a></li>

                {/if}

            {/foreach}

            {if isset($Next_Page)}

            <li>
                <a href="/{$category_url}/{$Next_Page}" aria-label="След.">
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