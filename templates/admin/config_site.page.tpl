{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}


<form role="form" action="/admin/config/update" method="post">

    <div class="col-lg-6">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки сайта</h3>
            </div>
            <div class="panel-body" id="site_settings">

                <div class="form-group">
                    <label>Заголовок сайта</label>
                    <input type="text" id="site_title" name="config[site_title]" class="form-control" autocomplete="off" value="{$site_settings.site_title}" require>
                </div>
                <div class="form-group" id="site_logo">
                    <label>Логотип</label>
                    <div class="input-group" id="gallery_button_add">
                        <input type="text" id="fieldID1" name="config[site_logo]" class="form-control" placeholder="Выбрать логотип..." value="{$site_settings.site_logo}" readonly>
                        <span class="input-group-btn">
                            <a data-toggle="modal" class="btn btn-primary" data-target="#myModal">Выбрать</a>
                        </span>
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
                      <iframe width="100%" height="400" src="/filemanager/dialog.php?type=1&relative_url=1&field_id=fieldID1" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                  </div>
                </div>
                </div>

                <div class="form-group" id="site_favicon">
                    <label>Иконка</label>
                    <div class="input-group" id="gallery_button_add">
                        <input type="text" id="fieldID2" name="config[site_favicon]" class="form-control" placeholder="Выбрать логотип..." value="{$site_settings.site_favicon}" readonly>
                        <span class="input-group-btn">
                            <a data-toggle="modal" class="btn btn-primary" data-target="#myModal2">Выбрать</a>
                        </span>
                    </div>
                </div>

                <div class="modal fade myModal" id="myModal2">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Файловый менеджер</h4>
                    </div>
                    <div class="modal-body" style="padding:0px; margin: 0px; width: 100%;">
                      <iframe width="100%" height="400" src="/filemanager/dialog.php?&relative_url=1&field_id=fieldID2" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                  </div>
                </div>
                </div>

                <div class="form-group">
                    <label>Кол-во записей на странице категорий</label>
                    <input type="number" id="record_per_page" name="config[record_per_page]" class="form-control" autocomplete="off" value="{$site_settings.record_per_page}" require>
                </div>
                <div class="form-group">
                    <label>Кол-во элементов на странице галереи</label>
                    <input type="number"  id="gallery_per_page" name="config[gallery_per_page]" class="form-control" autocomplete="off" value="{$site_settings.gallery_per_page}" require>
                </div>

                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Настройки миниатюр</h3>
                    </div>
                    <div class="panel-body" id="site_settings">

                        <div class="form-group">
                            <label>Галерея: Высота</label>
                            <input type="number"  name="config[thumb_gallery_height]" class="form-control" autocomplete="off" value="{$site_settings.thumb_gallery_height}" require>
                        </div>

                        <div class="form-group">
                            <label>Галерея: Ширина</label>
                            <input type="number"  name="config[thumb_gallery_width]" class="form-control" autocomplete="off" value="{$site_settings.thumb_gallery_width}" require>
                        </div>

                        <div class="form-group">
                            <label>Записи: Высота</label>
                            <input type="number"  name="config[thumb_record_height]" class="form-control" autocomplete="off" value="{$site_settings.thumb_record_height}" require>
                        </div>

                        <div class="form-group">
                            <label>Записи: Ширина</label>
                            <input type="number"  name="config[thumb_record_width]" class="form-control" autocomplete="off" value="{$site_settings.thumb_record_width}" require>
                        </div>

                    </div>
                </div>

                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Выбор темы</h3>
                    </div>
                    <div class="panel-body" id="site_settings">

                        <div class="form-group">
                            <label>Тема</label>
                            <select class="form-control" id="themes" name="config[theme]">
                            {foreach $themes as $theme}
                                <option value="{$theme}" {if $theme == $site_settings.theme} selected {/if}>{$theme}</option>
                            {/foreach}
                            </select>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    </div>


    <div class="clearfix"></div>

    <div class="col-lg-6">
      <div class="well center-block">
        <button type="submit" id="config_save_button" class="btn btn-success btn-lg btn-block">Обновить настройки</button>
      </div>
    </div>

</form>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}