<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 09:16:00
         compiled from "templates\admin\config_analytics.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143535558322043b098-62163559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72a443d691529434a1c00a98ebd2ab54037dc50d' => 
    array (
      0 => 'templates\\admin\\config_analytics.page.tpl',
      1 => 1431192082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143535558322043b098-62163559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55583220494e37_68095554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55583220494e37_68095554')) {function content_55583220494e37_68095554($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



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
      <div class="well center-block">
        <button type="submit" id="config_save_button" class="btn btn-success btn-lg btn-block">Обновить настройки</button>
      </div>
    </div>

</form>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
