{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}


<form role="form" action="/admin/config/update" method="post">
 
    <div class="col-lg-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки Социальных кнопок</h3>
            </div>
            <div class="panel-body">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa  fa-facebook fa-fw"></i> Facebook</h3>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Верхняя часть кода кнопки</label>
                            <textarea class="form-control" name="config[fb_header]" rows="10">{$site_settings.fb_header}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Нижняя часть кода кнопки</label>
                            <textarea class="form-control" name="config[fb_footer]" rows="10">{$site_settings.fb_footer}</textarea>
                        </div>

                    </div>
                </div>

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-vk fa-fw"></i> Вконтакте</h3>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Верхняя часть кода кнопки</label>
                            <textarea class="form-control" name="config[vk_header]" rows="10">{$site_settings.vk_header}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Нижняя часть кода кнопки</label>
                            <textarea class="form-control" name="config[vk_footer]" rows="10">{$site_settings.vk_footer}</textarea>
                        </div>

                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa  fa-twitter fa-fw"></i> Twitter</h3>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Код кнопки</label>
                            <textarea class="form-control" name="config[twitter]" rows="7">{$site_settings.twitter}</textarea>
                        </div>

                    </div>
                </div>

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa  fa-google-plus fa-fw"></i> Google plus</h3>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Верхняя часть кода кнопки</label>
                            <textarea class="form-control" name="config[gplus_header]" rows="10">{$site_settings.gplus_header}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Нижняя часть кода кнопки</label>
                            <textarea class="form-control" name="config[gplus_footer]" rows="10">{$site_settings.gplus_footer}</textarea>
                        </div>

                    </div>
                </div>

                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa  fa-share-alt fa-fw"></i> Яндекс кнопка</h3>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Код кнопки</label>
                            <textarea class="form-control" name="config[yandex_share]" rows="7">{$site_settings.yandex_share}</textarea>
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