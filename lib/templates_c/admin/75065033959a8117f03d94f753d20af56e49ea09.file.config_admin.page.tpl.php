<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 09:16:05
         compiled from "templates\admin\config_admin.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1573455583225722622-83866721%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75065033959a8117f03d94f753d20af56e49ea09' => 
    array (
      0 => 'templates\\admin\\config_admin.page.tpl',
      1 => 1431192532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1573455583225722622-83866721',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5558322578fc46_20891313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5558322578fc46_20891313')) {function content_5558322578fc46_20891313($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<form role="form" action="/admin/config/update" method="post">
    <div class="col-lg-6">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки адм. части</h3>
            </div>
            <div class="panel-body" id="adm_settings">

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
      <div class="well center-block">
        <button type="submit" id="config_save_button" class="btn btn-success btn-lg btn-block">Обновить настройки</button>
      </div>
    </div>

</form>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
