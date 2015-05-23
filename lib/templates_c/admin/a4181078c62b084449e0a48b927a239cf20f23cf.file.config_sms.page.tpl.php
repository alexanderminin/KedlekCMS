<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 11:57:49
         compiled from "templates\admin\config_sms.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117955583219366862-47986632%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4181078c62b084449e0a48b927a239cf20f23cf' => 
    array (
      0 => 'templates\\admin\\config_sms.page.tpl',
      1 => 1431853065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117955583219366862-47986632',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555832193eb584_85573131',
  'variables' => 
  array (
    'site_settings' => 0,
    'balance' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555832193eb584_85573131')) {function content_555832193eb584_85573131($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<form role="form" action="/admin/config/update" method="post">

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


    <div class="clearfix"></div>

    <div class="col-lg-6">
      <div class="well center-block">
        <button type="submit" id="config_save_button" class="btn btn-success btn-lg btn-block">Обновить настройки</button>
      </div>
    </div>

</form>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
