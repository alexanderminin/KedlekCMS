<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-14 06:44:27
         compiled from "templates\front\footer.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2355855264123aa0017-40673836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc9963e9bb9eeec3beca8f7830e6ad84b0a41cd8' => 
    array (
      0 => 'templates\\front\\footer.inc.tpl',
      1 => 1428983033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2355855264123aa0017-40673836',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55264123acafa5_98997078',
  'variables' => 
  array (
    'site_settings' => 0,
    'site_javascript' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55264123acafa5_98997078')) {function content_55264123acafa5_98997078($_smarty_tpl) {?>        <!-- Конец контента -->
        </div>

        <footer class="footer">
            <div class="row">
                
                <div class="col-md-12">


                    <!-- facebook -->
                        <div class="col-md-3 share">
                        <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['fb_footer'];?>

                        </div>
                    <!-- end of facebook -->

                    <!-- Vkontakte -->
                        <div class="col-md-3 share">
                            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['vk_footer'];?>

                        </div>
                    <!-- end of Vkontakte -->

                    <!-- Twitter -->
                        <div class="col-md-2 share">
                            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['twitter'];?>

                        </div>
                    <!-- end of Twitter -->

                    <!-- Google plus -->
                        <div class="col-md-2 share">
                            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['gplus_footer'];?>

                        </div>
                    <!-- end of Google plus -->

                    <!-- Yandex share -->
                        <div class="col-md-2 share">
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
 type="text/javascript" src="/dist/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/config/sweetalert/callback.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/smartmenus/jquery.smartmenus.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/smartmenus/jquery.smartmenus.bootstrap.min.js"><?php echo '</script'; ?>
>


    <?php echo $_smarty_tpl->tpl_vars['site_javascript']->value;?>


</body>

</html><?php }} ?>
