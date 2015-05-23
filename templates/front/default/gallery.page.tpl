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
        <div class="panel-heading">
            <h3 class="panel-title">{$descr}</h3>
        </div>
        <div class="panel-body" id="gallery_shuff">
            <div class="col-lg-12">
                <div id="foo" class = "img_list img_list_items">

                    {foreach from=$items key=i item=item}
                        <article>
                            <div class="col-lg-3 col-md-4 col-xs-6 thumb" style="padding-top: 15px;">
                                <div>
                                    <a href="/images/{$item.file}" class="img-thumbnail" data-gallery>
                                        <img class="img-responsive" src="/images/{$item.thumb}" alt="{$title}">
                                    </a>
                                </div>
                            </div>
                        </article>
         
                    {/foreach}

                </div>
            </div>

        </div>
        <div class="panel-footer"><a href="/{$parent_url}">Назад</a></div>

    </div>

</section>

<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Пред.
                    </button>
                    <button type="button" class="btn btn-primary next">
                        След.
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}