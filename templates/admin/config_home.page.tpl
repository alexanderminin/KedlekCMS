{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}


<form role="form" action="/admin/config/update" method="post">
   

    <div class="col-lg-6">

        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки главной страницы</h3>
            </div>
            <div class="panel-body" id="home">

                <div class="form-group">
                    <label>Выбрать главную страницу</label>
                    <select class="form-control" id="home_url" name="config[home_url]">
                        
                        <option value="">-- Не задана --</option>

                        {foreach $pages as $page}

                        <option value="{$page.url}" {if $page.url == $site_settings.home_url} selected {/if}>{$page.title}</option>

                        {/foreach}

                    </select>
                </div>

                <div class="form-group" id="home_html">
                    <label>Доп. HTML блок</label>
                    <textarea class="form-control  moxiecut" name="config[home_html]" rows="10">{$site_settings.home_html}</textarea> 
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