<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-09 20:36:42
         compiled from "templates\admin\configcontacts.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32708554e3f06937a55-33918711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7d87e99527d4d7ea3b571b5514498870f6eefb1' => 
    array (
      0 => 'templates\\admin\\configcontacts.page.tpl',
      1 => 1431193000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32708554e3f06937a55-33918711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554e3f069917f1_38109515',
  'variables' => 
  array (
    'site_settings' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554e3f069917f1_38109515')) {function content_554e3f069917f1_38109515($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<form role="form" action="/admin/config/update" method="post">
   

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

                <div class="form-group" id="contact_html">
                    <label>Доп. информация на странице</label>
                    <textarea class="form-control  moxiecut" name="config[contact_html]" rows="10"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['contact_html'];?>
</textarea> 
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
