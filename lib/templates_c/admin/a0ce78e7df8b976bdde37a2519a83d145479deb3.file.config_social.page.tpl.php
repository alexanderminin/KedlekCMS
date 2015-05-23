<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 09:15:58
         compiled from "templates\admin\config_social.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:246325558321e7dc551-36981304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0ce78e7df8b976bdde37a2519a83d145479deb3' => 
    array (
      0 => 'templates\\admin\\config_social.page.tpl',
      1 => 1431191904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '246325558321e7dc551-36981304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5558321e845ce8_55845838',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5558321e845ce8_55845838')) {function content_5558321e845ce8_55845838($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<form role="form" action="/admin/config/update" method="post">
 
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

    <div class="clearfix"></div>

    <div class="col-lg-6">
      <div class="well center-block">
        <button type="submit" id="config_save_button" class="btn btn-success btn-lg btn-block">Обновить настройки</button>
      </div>
    </div>

</form>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
