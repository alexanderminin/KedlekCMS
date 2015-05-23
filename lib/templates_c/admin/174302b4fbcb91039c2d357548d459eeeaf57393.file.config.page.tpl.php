<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-21 19:10:45
         compiled from "templates\admin\config.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22805552a3b3abd72b9-88320296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '174302b4fbcb91039c2d357548d459eeeaf57393' => 
    array (
      0 => 'templates\\admin\\config.page.tpl',
      1 => 1429632529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22805552a3b3abd72b9-88320296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552a3b3ad13984_38325044',
  'variables' => 
  array (
    'role' => 0,
    'site_settings' => 0,
    'balance' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552a3b3ad13984_38325044')) {function content_552a3b3ad13984_38325044($_smarty_tpl) {?>
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

    <div class="col-lg-6">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки сайта</h3>
            </div>
            <div class="panel-body" id="site_settings">

                <div class="form-group">
                    <label>Заголовок сайта</label>
                    <input type="text" id="site_title" name="config[site_title]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['site_title'];?>
" require>
                </div>
                <div class="form-group" id="site_logo">
                    <label>Логотип</label>
                    <div class="input-group" id="gallery_button_add">
                        <input type="text" id="fieldID1" name="config[site_logo]" class="form-control" placeholder="Выбрать логотип..." value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['site_logo'];?>
" readonly>
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
                        <input type="text" id="fieldID2" name="config[site_favicon]" class="form-control" placeholder="Выбрать логотип..." value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['site_favicon'];?>
" readonly>
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
                    <input type="number" id="record_per_page" name="config[record_per_page]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['record_per_page'];?>
" require>
                </div>
                <div class="form-group">
                    <label>Кол-во элементов на странице галереи</label>
                    <input type="number"  id="gallery_per_page" name="config[gallery_per_page]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['gallery_per_page'];?>
" require>
                </div>

                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h3 class="panel-title">Настройки миниатюр</h3>
                    </div>
                    <div class="panel-body" id="site_settings">

                        <div class="form-group">
                            <label>Галерея: Высота</label>
                            <input type="number"  name="config[thumb_gallery_height]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['thumb_gallery_height'];?>
" require>
                        </div>

                        <div class="form-group">
                            <label>Галерея: Ширина</label>
                            <input type="number"  name="config[thumb_gallery_width]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['thumb_gallery_width'];?>
" require>
                        </div>

                        <div class="form-group">
                            <label>Записи: Высота</label>
                            <input type="number"  name="config[thumb_record_height]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['thumb_record_height'];?>
" require>
                        </div>

                        <div class="form-group">
                            <label>Записи: Ширина</label>
                            <input type="number"  name="config[thumb_record_width]" class="form-control" autocomplete="off" value="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['thumb_record_width'];?>
" require>
                        </div>

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

                <div class="form-group">
                    <label>Доп. информация на странице</label>
                    <textarea id="contact_html" class="form-control  moxiecut" name="config[contact_html]" rows="10"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['contact_html'];?>
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
