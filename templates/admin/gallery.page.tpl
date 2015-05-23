{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<div class="col-lg-12">

    {foreach $items as $item}

            {if $item.type == 2}
                
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/{$item.file}?hd=1&rel=0" allowfullscreen></iframe>
                        </div>
                        <div class="caption">
                        <h3>{$item.title}
                        <a href="/admin/gallerylist/updgalleryvideo/{$item.id}" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></a>
                        <a href="/admin/gallerylist/del/{$item.id}" class="btn btn-danger btn-circle" style="margin-left:5px;"><i class="fa fa-trash-o"></i></a>
                        </h3>
                        <p><span class="label label-default">{$item.datetime}</span></p>
                        <p>{$item.descr}</p>
                        </div>
                    </div>
                </div>

            {else}

                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="embed-responsive embed-responsive-4by3">
                            <a href="/admin/gallerylist/updgallery/{$item.id}" class="img-thumbnail thumb-div" >
                                <img class="img-responsive thumb-img" src="/images/{$item.thumb}"  alt="Banana">
                            </a>
                        </div>
                        <div class="caption">
                            <h3>{$item.title}
                            <a href="/admin/gallerylist/updgallery/{$item.id}" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></a>
                            <a href="/admin/gallerylist/del/{$item.id}" class="btn btn-danger btn-circle" style="margin-left:5px;"><i class="fa fa-trash-o"></i></a>
                            </h3>
                            <p><span class="label label-default">{$item.datetime}</span></p>
                            <p>{$item.descr}
                            </p>
                        </div>
                    </div>
                </div>

            {/if}

        {/foreach}

</div>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}