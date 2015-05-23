<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 16:48:50
         compiled from "templates\admin\footer.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26956552531c270c999-92258307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b87815b69788870efd243114ffb3e3e2f7605531' => 
    array (
      0 => 'templates\\admin\\footer.inc.tpl',
      1 => 1428484644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26956552531c270c999-92258307',
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
  'unifunc' => 'content_552531c2727f16_34967711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552531c2727f16_34967711')) {function content_552531c2727f16_34967711($_smarty_tpl) {?>        </div>

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
