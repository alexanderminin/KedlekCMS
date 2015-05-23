<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-18 19:07:05
         compiled from "templates\admin\config_home.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16321555a0b3d46bdf9-32473572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad2447f5f6062f2021adbd79b7117e6607a76b2c' => 
    array (
      0 => 'templates\\admin\\config_home.page.tpl',
      1 => 1431965218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16321555a0b3d46bdf9-32473572',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555a0b3d615ad1_83128805',
  'variables' => 
  array (
    'pages' => 0,
    'page' => 0,
    'site_settings' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555a0b3d615ad1_83128805')) {function content_555a0b3d615ad1_83128805($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



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
                        
                        <option value="">Без подключения</option>

                        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>

                        <option value="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value['url']==$_smarty_tpl->tpl_vars['site_settings']->value['home_url']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</option>

                        <?php } ?>

                    </select>
                </div>

                <div class="form-group" id="home_html">
                    <label>Доп. HTML блок</label>
                    <textarea class="form-control  moxiecut" name="config[home_html]" rows="10"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['home_html'];?>
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
