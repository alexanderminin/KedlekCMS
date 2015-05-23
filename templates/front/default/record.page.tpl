{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<aside class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li><a href="/{$parent_url}">{$parent_title}</a></li>
        <li class="active">{$title}</li>
    </ol>
</aside>

<section class="col-lg-12 col-md-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">{$title}</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">{$text}</div>
            </div>
        </div>
        <div class="panel-footer">{$datetime}</div>
    </div>
</section>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}