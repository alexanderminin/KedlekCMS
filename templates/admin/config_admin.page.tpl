{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}


<form role="form" action="/admin/config/update" method="post">
    <div class="col-lg-6">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки адм. части</h3>
            </div>
            <div class="panel-body" id="adm_settings">

                <div class="form-group">
                    <label>Название адм. части</label>
                    <input type="text"  name="config[admin_title]" class="form-control" autocomplete="off" value="{$site_settings.admin_title}">
                </div>
                <div class="form-group">
                    <label>Ссылка на сайт</label>
                    <input type="text"  name="config[admin_site_url]" class="form-control" autocomplete="off" value="{$site_settings.admin_site_url}">
                </div>

                <div class="form-group">

                    <label>Подсказки интерфейса</label>
                    <div class="btn-group" data-toggle="buttons" id="help_button">
                        <label class="btn btn-default {if $site_settings.help_active == '1'} active {/if}">
                            <input type="radio" name="config[help_active]" value="1" {if $site_settings.help_active == '1'} checked {/if}/> Откл
                        </label> 
                        <label class="btn btn-default {if $site_settings.help_active == '2'} active {/if}">
                            <input type="radio" name="config[help_active]" value="2" {if $site_settings.help_active == '2'} checked {/if}/> Вкл
                        </label> 
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