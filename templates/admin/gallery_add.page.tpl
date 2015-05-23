{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<div id="file_manager"></div>
<form role="form" action="/admin/gallerylist/add" method="post">

    <div class="col-lg-6 col-md-6 col-xs-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Создать галерею</h3>
            </div>
            <div class="panel-body" id="gallery_add">

                <div class="form-group">
                    <label>Обложка</label>
                    <div class="input-group" id="gallery_button_add">
                        <input type="text" id="fieldID1" name="file" class="form-control" placeholder="Выбрать обложку..."  readonly>
                        <span class="input-group-btn">
                            <a data-toggle="modal" class="btn btn-primary" data-target="#myModal">Выбрать</a>
                        </span>
                    </div>
                </div>


                <div class="form-group" >
                    <label>Дата</label>
                    <input id="pick_date" type="text" class="form-control date" name="datetime" value="{$date}" placeholder="гггг.мм.дд" autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Заголовок</label>
                    <input id="add_title" type="text" class="form-control" name="title"
                    oninput="document.getElementById('seo_param_title').value=this.value;"
                    onkeydown="document.getElementById('seo_param_title').value=this.value;"
                    placeholder="Название галереи" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label class="control-label">URL альбома</label>
                    <input id="add_url" type="text" class="form-control" name="url" placeholder="albom" autocomplete="off" require>
                </div>


                <div class="form-group">
                    <label class="control-label">Галерея</label>

                    <select class="form-control" name="gallery_list_id" id="gallery_param_gallery_list">

                        {foreach $gallery_list as $gallery}

                            <option value="{$gallery.id}" >{$gallery.title}</option>

                        {/foreach}

                    </select>

                </div>

                <div class="form-group" >
                    <label>Описание</label>
                    <textarea id="add_descr" class="form-control"
                    oninput="document.getElementById('seo_param_descr').value=this.value;"
                    onkeydown="document.getElementById('seo_param_descr').value=this.value;"
                    name="descr" rows="3"></textarea>
                </div>

                <input type=hidden name="type" value='1'>

            </div>

            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success dsbd" disabled="disabled">Добавить</button>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">SEO настройки</h3>
            </div>
            <div class="panel-body" id="seo_param">

                <div class="form-group">
                    <label>Заголовок</label>
                    <input id="seo_param_title" type="text" class="form-control" name="seo_title" placeholder="Заголовок страницы"  autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <input id="seo_param_descr" type="text" class="form-control" name="seo_descr" placeholder="Краткое описание"  autocomplete="off">
                </div>

                <div class="form-group" id="seo_param_keywords">
                    <label>Ключевые слова</label><br/>
                    <input type="text" class="form-control" data-role="tagsinput" name="seo_keywords" autocomplete="off">
                </div>

            </div>
        </div>
    </div>

</form>

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

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}