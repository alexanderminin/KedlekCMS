<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 11:47:27
         compiled from "templates\front\default\footer.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:323885557356c7afd48-37760560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4bc2e2df30de08bf47afeeea60338b037bc4fd57' => 
    array (
      0 => 'templates\\front\\default\\footer.inc.tpl',
      1 => 1431852442,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323885557356c7afd48-37760560',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5557356c7c7446_52258323',
  'variables' => 
  array (
    'site_settings' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5557356c7c7446_52258323')) {function content_5557356c7c7446_52258323($_smarty_tpl) {?>        <!-- Конец контента -->
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
 type="text/javascript" src="/dist/config/sweetalert/question.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/smartmenus/jquery.smartmenus.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/dist/smartmenus/jquery.smartmenus.bootstrap.min.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 type="text/javascript" src="/dist/config/form.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/dist/bootstrap-image-gallery/js/bootstrap-image-gallery.min.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 type="text/javascript" src="/dist/fancybox/jquery.fancybox.pack.js?v=2.1.5"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="/dist/config/fancybox/config.js"><?php echo '</script'; ?>
>
	

</body>

</html><?php }} ?>
