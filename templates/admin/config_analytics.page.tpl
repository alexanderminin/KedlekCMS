{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}


<form role="form" action="/admin/config/update" method="post">
 
    <div class="col-lg-6">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки счетчиков аналитики</h3>
            </div>
            <div class="panel-body">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa  fa-google-plus fa-fw"></i> Google analytics</h3>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Код счетчика</label>
                            <textarea class="form-control" name="config[google_analytics]" rows="10">{$site_settings.google_analytics}</textarea>
                        </div>

                    </div>
                </div>

                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa  fa-share-alt fa-fw"></i> Яндекс Метрика</h3>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Код счетчика</label>
                            <textarea class="form-control" name="config[yandex_metrika]" rows="7">{$site_settings.yandex_metrika}</textarea>
                        </div>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa  fa-bar-chart-o fa-fw"></i> Другая аналитика</h3>
                    </div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label>Код счетчика</label>
                            <textarea class="form-control" name="config[other_metrika]" rows="7">{$site_settings.other_metrika}</textarea>
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