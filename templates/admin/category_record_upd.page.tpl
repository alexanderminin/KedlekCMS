{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<form role="form" action="/admin/category/update_record" method="post">

    <input type="hidden" id="record_id" name="id" value="{$item.id}">

    <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Параметры записи</h3>
            </div>
            <div class="panel-body" id="record_param">

                <div class="form-group">
                    <label>Заголовок</label>
                    <input type="text" id="record_param_title" class="form-control" 
                    oninput="document.getElementById('seo_param_title').value=this.value;"
                    onkeydown="document.getElementById('seo_param_title').value=this.value;"
                    name="title" placeholder="Заголовок записи" value="{$item.title}" autocomplete="off" require>
                </div>

                <div class="form-group">
                    <label class="control-label">Категория</label>

                    <select class="form-control" name="category_id" id="record_param_category">

                        {foreach $category as $cat}

                            <option value="{$cat.id}" {if $item.category_id == $cat.id} selected {/if}>{$cat.title}</option>

                        {/foreach}

                    </select>

                </div>


                <div class="form-group" id="record_param_datetime">
                    <label>Дата и время</label>
                    <input type="text" id="pick_date" class="form-control date" name="date" value="{$date}">
                    <input type="text" id="pick_time" class="form-control time" style="margin-top: 10px;" name="time" value="{$time}">
                </div>

                <div class="form-group">
                    <label class="control-label">URL записи</label>
                    <input id="record_param_url" type="text" class="form-control" name="url" placeholder="zapis" value="{$item.url}" autocomplete="off" require>
                </div>

                <div class="form-group">
                    <label>Миниатюра</label>
                    <div class="input-group" id="record_param_file">
                        <input type="text" id="fieldID1" name="file" value="{$item.file}" class="form-control" placeholder="Выбрать миниатюру..." readonly>
                        <span class="input-group-btn">
                            <a data-toggle="modal" class="btn btn-primary" data-target="#myModal">Выбрать миниатюру</a>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade myModal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Файловый менеджер</h4>
        </div>
        <div class="modal-body" style="padding:0px; margin: 0px; width: 100%;">
          <iframe width="100%" height="400" src="/filemanager/dialog.php?type=1&relative_url=1&field_id=fieldID1&width={$site_settings.thumb_record_width}&height={$site_settings.thumb_record_height}" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
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
                    <input id="seo_param_title" type="text" class="form-control" value="{$item.seo_title}" name="seo_title" placeholder="Заголовок страницы"  autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <input id="seo_param_descr" type="text" class="form-control" value="{$item.seo_descr}" name="seo_descr" placeholder="Краткое описание"  autocomplete="off">
                </div>

                <div class="form-group" id="seo_param_keywords">
                    <label>Ключевые слова</label><br/>
                    <input type="text" class="form-control" data-role="tagsinput" value="{$item.seo_keywords}" name="seo_keywords" autocomplete="off">
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Миниатюра записи</h3>
            </div>
            <div class="panel-body" id="gallery_image">
                <div class="img-thumbnail thumb-div" >
                    <img class="img-responsive thumb-img" src="/images/{$item.thumb}"  alt="{$item.title}">
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Описание записи</h3>
            </div>
            <div class="panel-body" id="record_param_decr">

                <textarea id="page_param_descr" class="form-control moxiecut2" name="descr" rows="5">{$item.descr}</textarea>

            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Содержимое записи</h3>
            </div>
            <div class="panel-body" id="record_text">   
                <textarea class="form-control moxiecut" name="text" rows="10">{$item.text}</textarea>
            </div>
            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success">Сохранить запись</button>
            </div>
        </div>
    </div>

</form>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}