{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}


<form role="form" action="/admin/config/update" method="post">
   

    <div class="col-lg-6">

        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки контактный данных (страница контакты)</h3>
            </div>
            <div class="panel-body" id="contact">

                <div class="form-group">
                    <label>Телефон</label>
                    <input type="text"  name="config[contact_phone]" class="form-control" autocomplete="off" value="{$site_settings.contact_phone}">
                </div>

                <div class="form-group">
                    <label>Адрес</label>
                    <input type="text"  name="config[contact_adr]" class="form-control" autocomplete="off" value="{$site_settings.contact_adr}">
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text"  name="config[contact_mail]" class="form-control" autocomplete="off" value="{$site_settings.contact_mail}">
                </div>

                <div class="form-group">
                    <label>Код карты местоположения</label>
                    <textarea id="contact_map" class="form-control" name="config[contact_map]" rows="10">{$site_settings.contact_map}</textarea> 
                </div>

                <div class="form-group" id="contact_html">
                    <label>Доп. информация на странице</label>
                    <textarea class="form-control  moxiecut" name="config[contact_html]" rows="10">{$site_settings.contact_html}</textarea> 
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