{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<div class="col-lg-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Редактировать видео</h3>
        </div>
        <form role="form" action="/admin/gallerylist/update_video" method="post">
            <div class="panel-body" id="gallery_add">

                    <input type="hidden" name="id" value="{$item.id}">
                
                    <div class="form-group">
                        <label>Ссылка на YouTube</label>
                        <input type="text" id="gallery_button_add" name="file" value="{$item.file}" class="form-control" placeholder="Пример: jocClWzzgmk" autocomplete="off" required>
                    </div>


                    <div class="form-group">
                        <label>Дата</label>
                        <input type="text" id="pick_date" class="form-control date" name="datetime" value="{$item.datetime}" placeholder="гггг.мм.дд" autocomplete="off">
                    </div>

                    <div class="form-group" >
                        <label>Заголовок</label>
                        <input type="text" id="add_title" class="form-control" name="title" value="{$item.title}" placeholder="Название видео" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Галерея</label>

                        <select class="form-control" name="gallery_list_id" id="gallery_param_gallery_list">

                            {foreach $gallery_list as $gallery}

                                <option value="{$gallery.id}"  {if $item.gallery_list_id == $gallery.id} selected {/if}>{$gallery.title}</option>

                            {/foreach}

                        </select>

                    </div>

                    <div class="form-group" >
                        <label>Описание</label>
                        <textarea id="add_descr" class="form-control" name="descr" rows="3">{$item.descr}</textarea>
                    </div>

                    <input type=hidden name="type" value='2'>

            </div>
            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success">Обновить</button>
            </div>
        </form>
    </div>

</div>

<div class="col-lg-6 col-md-6 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Видео</h3>
        </div>
        <div class="panel-body" id="gallery_current">

            <div class="thumbnail">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item"  id="thumb_view" src="//www.youtube.com/embed/{$item.file}?hd=1&rel=0" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>

</div>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}