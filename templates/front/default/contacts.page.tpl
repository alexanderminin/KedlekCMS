{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<aside class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li class="active">{$title}</li>
    </ol>
</aside>

<section class="col-lg-6 col-md-6 col-xs-12">
    <div class="col-lg-12 col-md-12 col-xs-12">

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">

                    <div class="col-lg-12">
                        <b>Телефон:</b> {$site_settings.contact_phone}
                    </div>
                    <div class="col-lg-12">
                        <b>E-mail:</b> {$site_settings.contact_adr}
                    </div>
                    <div class="col-lg-12">
                        <b>Адрес:</b> {$site_settings.contact_mail}
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="col-lg-12 col-md-12 col-xs-12">

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">{$site_settings.contact_html}</div>
            </div>
        </div>

    </div>

    <div class="col-lg-12 col-md-12 col-xs-12">

        <div class="panel panel-default">
            <div class="panel-heading">Карта </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        {$site_settings.contact_map}
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="col-lg-6 col-md-6 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Форма обратной связи</h3>
        </div>
        <div class="panel-body">
            <div class="form-style" id="contact_form">
                <div id="contact_results"></div>
                <div id="contact_body">
                    
                    <div class="form-group">
                        <label class="control-label" for="name">Имя <span class="required">*</span></label>
                        <input type="text" name="name" required="true" class="input-field form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email">Email <span class="required">*</span></label>
                        <input type="email" name="email" required="true" class="input-field form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="phone">Телефон</label>
                        <input type="text" name="phone" required="true" class="tel-number-field form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="subject">Тема сообщения</label>
                        <input type="text" name="subject" required="true" class="input-field form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="message">Сообщение</label>
                        <textarea name="message" id="message" class="textarea-field form-control" required="true"></textarea>
                    </div>

                    <div id="captcha" class="input-group form-group">
                        <span class="input-group-btn">
                        <button class="btn btn-primary" id="re" type="button">
                            <span id="rand1" class="badge">40</span> + <span id="rand2" class="badge">49</span> =
                        </button>
                        </span>
                        <input type="text" class="form-control" id="total" autocomplete="off" placeholder="Введите сумму чисел...">
                    </div>
                    
                    <button id="submit_btn" type="submit" class="btn btn-success">Отправить сообщение</button>

                </div>
            </div>
        </div>
    </div>
</section>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}