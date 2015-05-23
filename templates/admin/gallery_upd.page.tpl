{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<form role="form" action="/admin/gallerylist/update" method="post">

<div class="col-lg-4 col-md-4 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Редактировать альбом</h3>
        </div>
        <div class="panel-body" id="gallery_edit">
            

                <div class="form-group">
                    <label>Обложка</label>
                    <div class="input-group">
                        <input type="text" id="fieldID1" name="file" class="form-control" value="{$item.file}" placeholder="Выбрать обложку..." readonly>
                        <span class="input-group-btn">
                            <a data-toggle="modal" class="btn btn-primary" data-target="#myModal">Выбрать</a>
                        </span>
                    </div>
                </div>


                <div class="form-group">
                    <label>Дата</label>
                    <input type="text" class="form-control date" name="datetime" value="{$item.datetime}" placeholder="гггг.мм.дд" autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Заголовок</label>
                    <input type="text" class="form-control" name="title" placeholder="Название галереи"
                    oninput="document.getElementById('seo_param_title').value=this.value;"
                    onkeydown="document.getElementById('seo_param_title').value=this.value;"
                    value="{$item.title}"  autocomplete="off">
                </div>

                <div class="form-group">
                    <label class="control-label">URL альбома</label>
                    <input id="add_url" type="text" class="form-control" name="url" placeholder="albom" value="{$item.url}" autocomplete="off" require>
                </div>

                <div class="form-group">
                    <label class="control-label">Категория</label>

                    <select class="form-control" name="gallery_list_id" id="gallery_param_gallery_list">

                        {foreach $gallery_list as $gallery}

                            <option value="{$gallery.id}" {if $item.gallery_list_id == $gallery.id} selected {/if}>{$gallery.title}</option>

                        {/foreach}

                    </select>

                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <textarea class="form-control" name="descr" rows="3">{$item.descr}</textarea>
                </div>

                <input type="hidden" id="gallery_id" name="id" value="{$item.id}">

                <button id="add_button" type="submit" class="btn btn-danger">Обновить</button>

            

            <div class="modal fade myModal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Файловый менеджер</h4>
                </div>
                <div class="modal-body" style="padding:0px; margin: 0px; width: 100%;">
                  <iframe width="100%" height="400" src="/filemanager/dialog.php?type=1&relative_url=1&field_id=fieldID1&width={$site_settings.thumb_gallery_width}&height={$site_settings.thumb_gallery_height}" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
              </div>
            </div>
            </div>

        </div>
    </div>

</div>

<div class="col-lg-4 col-md-4 col-xs-12">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">SEO настройки</h3>
        </div>
        <div class="panel-body" id="seo_param">

            <div class="form-group">
                <label>Заголовок</label>
                <input id="seo_param_title" type="text" class="form-control" name="seo_title" placeholder="Заголовок страницы" value="{$item.seo_title}" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Описание</label>
                <input id="seo_param_descr" type="text" class="form-control" name="seo_descr" placeholder="Краткое описание"  value="{$item.seo_descr}" autocomplete="off">
            </div>

            <div class="form-group" id="seo_param_keywords">
                <label>Ключевые слова</label><br/>
                <input type="text" class="form-control" data-role="tagsinput" name="seo_keywords" value="{$item.seo_keywords}" autocomplete="off">
            </div>

        </div>
    </div>
</div>

<div class="col-lg-4 col-md-4 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Обложка альбома</h3>
        </div>
        <div class="panel-body" id="gallery_image">
            <div class="img-thumbnail thumb-div" >
                <img id="thumb_view" class="img-responsive thumb-img" src="/images/{$item.thumb}"  alt="{$item.title}">
            </div>
        </div>
    </div>
</div>

</form>

<div class="col-lg-12 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Добавить элемент</h3>
        </div>
        <div class="panel-body" >
            <form role="form" action="/admin/gallerylist/itemadd" method="post">

                <div class="form-group">
                    <div class="input-group" id="gallery_add">
                        <input type="text" id="fieldID2" name="file" class="form-control" placeholder="Выбрать фото..."  readonly>
                        <input type=hidden name="g_id" value="{$g_id}">
                        <span class="input-group-btn">
                            <a data-toggle="modal" class="btn btn-primary" data-target="#myModal2">Выбрать</a>
                            <button type="submit" class="btn btn-success dsbd" disabled="disabled">Добавить</button>
                        </span>
                    </div>
                </div>

            </form>

            <div class="modal fade myModal" id="myModal2">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Файловый менеджер</h4>
                </div>
                <div class="modal-body" style="padding:0px; margin: 0px; width: 100%;">
                  <iframe width="100%" height="400" src="/filemanager/dialog.php?type=1&relative_url=1&field_id=fieldID2&width=400&height=300" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
              </div>
            </div>
            </div>

        </div>
    </div>

    <div id="file_manager"></div>

</div>




<div class="col-lg-12 col-md-12 col-xs-12">

    <form role="form" id="order">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Порядок элементов</h3>
            </div>
            <div class="panel-body" id="gallery_shuff">
                <div data-force="30" class="col-lg-12">
                    <div id="foo" class = "img_list img_list_items">

                        {foreach from=$items key=i item=item}

                            <div class="col-lg-3 col-md-4 col-xs-6 thumb order" style="padding-top: 15px;">
                                <div>
                                    <a href="/images/{$item.file}" class="img-thumbnail" data-gallery>
                                        <img class="img-responsive" src="/images/{$item.thumb}" alt="Banana">
                                    </a>
                                    <a href="/admin/gallerylist/delitem/{$item.id}" class="btn btn-danger btn-circle" style="position: absolute; top: 5px; right:0px; "><i class="fa fa-trash-o"></i></a>
                                </div>

                                <input type="hidden" name="id" value="{$item.id}">
                                <input type="hidden" class="new_value" name="ord" value="{$item.ord}">

                            </div>
             
                        {/foreach}

                    </div>
                </div>

            </div>

        </div>
    </form>

</div>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
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