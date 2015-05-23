<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 10:29:24
         compiled from "templates\front\footer.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3005655262a54158fb2-27050522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a6cda0d9d9d5bfaba1b9189dcedbc0d365d786' => 
    array (
      0 => 'templates\\front\\footer.inc.tpl',
      1 => 1428564487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3005655262a54158fb2-27050522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_settings' => 0,
    'site_javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55262a541783b7_92817055',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55262a541783b7_92817055')) {function content_55262a541783b7_92817055($_smarty_tpl) {?>        <!-- Конец контента -->
        </div>

        <footer class="footer">
            <div class="row">
                
                <div class="col-md-12" id="share">


                    <!-- facebook -->
                        <div class="col-md-3">
                        <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['fb_footer'];?>

                        </div>
                    <!-- end of facebook -->

                    <!-- Vkontakte -->
                        <div class="col-md-3">
                            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['vk_footer'];?>

                        </div>
                    <!-- end of Vkontakte -->

                    <!-- Twitter -->
                        <div class="col-md-2">
                            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['twitter'];?>

                        </div>
                    <!-- end of Twitter -->

                    <!-- Google plus -->
                        <div class="col-md-2">
                            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['gplus_footer'];?>

                        </div>
                    <!-- end of Google plus -->

                    <!-- Yandex share -->
                        <div class="col-md-2">
                            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['yandex_share'];?>

                        </div>
                    <!-- end of Yandex share -->


                </div>

            </div>
        </footer>

    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/pickadate/picker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/pickadate/picker.date.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/pickadate/legacy.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/pickadate/translations/ru_RU.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/config/pickadate/config.js"><?php echo '</script'; ?>
>

    <?php echo $_smarty_tpl->tpl_vars['site_javascript']->value;?>


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="/dist/bootstrap/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>

</body>

</html><?php }} ?>
