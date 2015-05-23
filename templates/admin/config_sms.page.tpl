{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}


<form role="form" action="/admin/config/update" method="post">

    <div class="col-lg-6">

        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки SMS шлюза</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <label>bytehandId</label>
                    <input type="text"  name="config[bytehandId]" class="form-control" autocomplete="off" value="{$site_settings.bytehandId}">
                </div>

                <div class="form-group">
                    <label>bytehandKey</label>
                    <input type="text"  name="config[bytehandKey]" class="form-control" autocomplete="off" value="{$site_settings.bytehandKey}">
                </div>

                <div class="form-group">
                    <label>bytehandFrom</label>
                    <input type="text"  name="config[bytehandFrom]" class="form-control" autocomplete="off" value="{$site_settings.bytehandFrom}">
                </div>

            </div>
        </div>

    </div>

    <div class="clearfix"></div>

    <div class="col-lg-6">

        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки SMS уведомлений</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <label>SMS уведомления</label>
                    <div class="btn-group" data-toggle="buttons" id="sms_active_button">
                        <label class="btn btn-default {if $site_settings.sms_active == '1'} active {/if}">
                            <input type="radio" name="config[sms_active]" value="1" {if $site_settings.sms_active == '1'} checked {/if}/> Не отправлять
                        </label> 
                        <label class="btn btn-default {if $site_settings.sms_active == '2'} active {/if}">
                            <input type="radio" name="config[sms_active]" value="2" {if $site_settings.sms_active == '2'} checked {/if}/> Отправлять
                        </label> 
                    </div>
                </div>

                <div class="form-group">
                    <label>Телефон</label>
                    <input type="text"  name="config[sms_phone]" id="config_phone" class="form-control" autocomplete="off" value="{$site_settings.sms_phone}">
                </div>

                <div class="form-group">
                    <label>Текст смс при вопросе</label>
                    <input id="config_message" type="text"  name="config[sms_message_question]" class="form-control" autocomplete="off" value="{$site_settings.sms_message_question}">
                    <span id="config_message_descr" class="help-block"><small><b>&#123;PHONE&#125;</b> - Номер абонента<br><b>&#123;NAME&#125;</b> - Имя абонента<br><b>&#123;QUESTION&#125;</b> - Вопрос</small></span>
                </div>

                <div class="form-group">
                    <label>Текст смс при запросе на обр. звонок</label>
                    <input type="text"  name="config[sms_message_call]" class="form-control" autocomplete="off" value="{$site_settings.sms_message_call}">
                    <span class="help-block"><small><b>&#123;PHONE&#125;</b> - Номер абонента<br><b>&#123;NAME&#125;</b> - Имя абонента<br><b>&#123;TIME&#125;</b> - Время для звонка</small></span>
                </div>

            </div>
            <div class="panel-footer"><span id="config_sms_balance" style="padding: 5px 5px 7px">Баланс: <span class="badge">{$balance}</span></span></div>
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