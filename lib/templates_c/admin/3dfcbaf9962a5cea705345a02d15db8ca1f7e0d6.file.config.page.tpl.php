<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 10:30:27
         compiled from "templates\admin\config.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1463255262a930a3bb4-07078906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dfcbaf9962a5cea705345a02d15db8ca1f7e0d6' => 
    array (
      0 => 'templates\\admin\\config.page.tpl',
      1 => 1428505444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1463255262a930a3bb4-07078906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'role' => 0,
    'site_settings' => 0,
    'balance' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55262a931f7981_96154822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55262a931f7981_96154822')) {function content_55262a931f7981_96154822($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<form role="form" action="/admin/config/update" method="post">
    <div class="col-lg-6">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки адм. части</h3>
            </div>
            <div class="panel-body" id="adm_settings">

                <?php if ($_smarty_tpl->tpl_vars['role']->value=='admin') {?>

                <div class="form-group">
                    <label>Название адм. части</label>
                    <input type="text"  name="config[admin_title]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['admin_title'];?>
">
                </div>
                <div class="form-group">
                    <label>Ссылка на сайт</label>
                    <input type="text"  name="config[admin_site_url]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['admin_site_url'];?>
">
                </div>

                <?php }?>

                <div class="form-group">

                    <label>Подсказки интерфейса</label>
                    <div class="btn-group" data-toggle="buttons" id="help_button">
                        <label class="btn btn-default <?php if ($_smarty_tpl->tpl_vars['site_settings']->value['help_active']=='1') {?> active <?php }?>">
                            <input type="radio" name="config[help_active]" value="1" <?php if ($_smarty_tpl->tpl_vars['site_settings']->value['help_active']=='1') {?> checked <?php }?>/> Откл
                        </label> 
                        <label class="btn btn-default <?php if ($_smarty_tpl->tpl_vars['site_settings']->value['help_active']=='2') {?> active <?php }?>">
                            <input type="radio" name="config[help_active]" value="2" <?php if ($_smarty_tpl->tpl_vars['site_settings']->value['help_active']=='2') {?> checked <?php }?>/> Вкл
                        </label> 
                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="clearfix"></div>

    <?php if ($_smarty_tpl->tpl_vars['role']->value=='admin') {?>
    <div class="col-lg-6">

        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки SMS шлюза</h3>
            </div>
            <div class="panel-body">

                <div class="form-group">
                    <label>bytehandId</label>
                    <input type="text"  name="config[bytehandId]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['bytehandId'];?>
">
                </div>

                <div class="form-group">
                    <label>bytehandKey</label>
                    <input type="text"  name="config[bytehandKey]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['bytehandKey'];?>
">
                </div>

                <div class="form-group">
                    <label>bytehandFrom</label>
                    <input type="text"  name="config[bytehandFrom]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['bytehandFrom'];?>
">
                </div>

            </div>
        </div>

    </div>

    <div class="clearfix"></div>

    <?php }?>

    <div class="col-lg-6">

        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки контактный данных (страница контакты)</h3>
            </div>
            <div class="panel-body" id="contact">

                <div class="form-group">
                    <label>Телефон</label>
                    <input type="text"  name="config[contact_phone]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['contact_phone'];?>
">
                </div>

                <div class="form-group">
                    <label>Адрес</label>
                    <input type="text"  name="config[contact_adr]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['contact_adr'];?>
">
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text"  name="config[contact_mail]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['contact_mail'];?>
">
                </div>

                <div class="form-group">
                    <label>Код карты местоположения</label>
                    <textarea id="contact_map" class="form-control" name="config[contact_map]" rows="10"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['contact_map'];?>
</textarea> 
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
                        <label class="btn btn-default <?php if ($_smarty_tpl->tpl_vars['site_settings']->value['sms_active']=='1') {?> active <?php }?>">
                            <input type="radio" name="config[sms_active]" value="1" <?php if ($_smarty_tpl->tpl_vars['site_settings']->value['sms_active']=='1') {?> checked <?php }?>/> Не отправлять
                        </label> 
                        <label class="btn btn-default <?php if ($_smarty_tpl->tpl_vars['site_settings']->value['sms_active']=='2') {?> active <?php }?>">
                            <input type="radio" name="config[sms_active]" value="2" <?php if ($_smarty_tpl->tpl_vars['site_settings']->value['sms_active']=='2') {?> checked <?php }?>/> Отправлять
                        </label> 
                    </div>
                </div>

                <div class="form-group">
                    <label>Телефон</label>
                    <input type="text"  name="config[sms_phone]" id="config_phone" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['sms_phone'];?>
">
                </div>

                <div class="form-group">
                    <label>Текст смс при вопросе</label>
                    <input id="config_message" type="text"  name="config[sms_message_question]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['sms_message_question'];?>
">
                    <span id="config_message_descr" class="help-block"><small><b>&#123;PHONE&#125;</b> - Номер абонента<br><b>&#123;NAME&#125;</b> - Имя абонента<br><b>&#123;QUESTION&#125;</b> - Вопрос</small></span>
                </div>

                <div class="form-group">
                    <label>Текст смс при заказе</label>
                    <input type="text"  name="config[sms_message_buy]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['sms_message_buy'];?>
">
                    <span class="help-block"><small><b>&#123;PHONE&#125;</b> - Номер абонента<br><b>&#123;NAME&#125;</b> - Имя абонента<br><b>&#123;ORDER&#125;</b> - Номер заказа</small></span>
                </div>

                <div class="form-group">
                    <label>Текст смс при запросе на обр. звонок</label>
                    <input type="text"  name="config[sms_message_call]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['sms_message_call'];?>
">
                    <span class="help-block"><small><b>&#123;PHONE&#125;</b> - Номер абонента<br><b>&#123;NAME&#125;</b> - Имя абонента<br><b>&#123;TIME&#125;</b> - Время для звонка</small></span>
                </div>

            </div>
            <div class="panel-footer"><span id="config_sms_balance" style="padding: 5px 5px 7px">Баланс: <span class="badge"><?php echo $_smarty_tpl->tpl_vars['balance']->value;?>
</span></span></div>
        </div>

    </div>

    <?php if ($_smarty_tpl->tpl_vars['role']->value=='admin') {?>

    <div class="clearfix"></div>

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
                            <textarea class="form-control" name="config[google_analytics]" rows="10"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['google_analytics'];?>
</textarea>
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
                            <textarea class="form-control" name="config[yandex_metrika]" rows="7"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['yandex_metrika'];?>
</textarea>
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
                            <textarea class="form-control" name="config[other_metrika]" rows="7"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['other_metrika'];?>
</textarea>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="clearfix"></div>

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
                            <textarea class="form-control" name="config[fb_header]" rows="10"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['fb_header'];?>
</textarea>
                        </div>

                        <div class="form-group">
                            <label>Нижняя часть кода кнопки</label>
                            <textarea class="form-control" name="config[fb_footer]" rows="10"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['fb_footer'];?>
</textarea>
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
                            <textarea class="form-control" name="config[vk_header]" rows="10"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['vk_header'];?>
</textarea>
                        </div>

                        <div class="form-group">
                            <label>Нижняя часть кода кнопки</label>
                            <textarea class="form-control" name="config[vk_footer]" rows="10"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['vk_footer'];?>
</textarea>
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
                            <textarea class="form-control" name="config[twitter]" rows="7"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['twitter'];?>
</textarea>
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
                            <textarea class="form-control" name="config[gplus_header]" rows="10"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['gplus_header'];?>
</textarea>
                        </div>

                        <div class="form-group">
                            <label>Нижняя часть кода кнопки</label>
                            <textarea class="form-control" name="config[gplus_footer]" rows="10"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['gplus_footer'];?>
</textarea>
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
                            <textarea class="form-control" name="config[yandex_share]" rows="7"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['yandex_share'];?>
</textarea>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <?php }?>

    <div class="clearfix"></div>

    <div class="col-lg-6">
      <div class="well center-block">
        <button type="submit" id="config_save_button" class="btn btn-success btn-lg btn-block">Обновить настройки</button>
      </div>
    </div>

</form>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
