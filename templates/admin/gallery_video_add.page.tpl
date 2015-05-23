{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<div class="col-lg-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Добавить видео</h3>
        </div>
        <form role="form" action="/admin/gallerylist/add" method="post">
            <div class="panel-body" id="gallery_add">

                    <input type="hidden" name="seo_title" value="">
                    <input type="hidden" name="seo_descr" value="">
                    <input type="hidden" name="seo_keywords" value="">
                    <input type="hidden" id="url" name="url" value="">
                
                    <div class="form-group">
                        <label>Ссылка на YouTube</label>
                        <input type="text" id="gallery_button_add" name="file" class="form-control"
                        oninput="document.getElementById('url').value=this.value;"
                        onkeydown="document.getElementById('url').value=this.value;"
                        placeholder="Пример: jocClWzzgmk" autocomplete="off" required>
                    </div>


                    <div class="form-group">
                        <label>Дата</label>
                        <input type="text" id="pick_date" class="form-control date" name="datetime" value="{$date}" placeholder="гггг.мм.дд" autocomplete="off">
                    </div>

                    <div class="form-group" >
                        <label>Заголовок</label>
                        <input type="text" id="add_title" class="form-control" name="title" placeholder="Название видео" autocomplete="off" required>
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
                        <textarea id="add_descr" class="form-control" name="descr" rows="3"></textarea>
                    </div>

                    <input type=hidden name="type" value='2'>

            </div>
            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success">Добавить</button>
            </div>
        </form>
    </div>

</div>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}