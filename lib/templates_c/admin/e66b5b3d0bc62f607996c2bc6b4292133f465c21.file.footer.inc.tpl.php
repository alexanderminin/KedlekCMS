<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 12:06:52
         compiled from "templates\admin\footer.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82215526412ceefa47-17749678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e66b5b3d0bc62f607996c2bc6b4292133f465c21' => 
    array (
      0 => 'templates\\admin\\footer.inc.tpl',
      1 => 1428484644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82215526412ceefa47-17749678',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_settings' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5526412cf032c7_91644443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526412cf032c7_91644443')) {function content_5526412cf032c7_91644443($_smarty_tpl) {?>        </div>

        <div class="row">
          <div class="col-lg-12" style="margin-bottom:20px;">
            <div style="padding-top: 9px; margin: 40px 0 20px; border-top: 1px solid #eee;"></div>
            <div class="clearfix"></div>
            <?php if ($_smarty_tpl->tpl_vars['site_settings']->value['help_active']=='2') {?>
            <div class="col-lg-2 col-lg-offset-10" id="help_button">
              <button type="button" id="demo" class="btn btn-default btn-xs"  data-demo="">
                  <span class="glyphicon glyphicon-play"></span>
                  Подсказка
              </button>
            </div>
            <?php }?>

          </div>
        </div>

    </div>
    <!-- Конец контента -->

    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['site_settings']->value['help_active']=='2') {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/bootstrap-tour-master/bootstrap-tour.min.js"><?php echo '</script'; ?>
>
    <?php }?>

    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['javascript']->value;?>


</body>

</html><?php }} ?>
