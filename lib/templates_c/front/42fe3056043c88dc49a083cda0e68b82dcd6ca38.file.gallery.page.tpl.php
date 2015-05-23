<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-10 19:34:55
         compiled from "templates\front\gallery.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:992155267967519529-08244846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42fe3056043c88dc49a083cda0e68b82dcd6ca38' => 
    array (
      0 => 'templates\\front\\gallery.page.tpl',
      1 => 1431275671,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '992155267967519529-08244846',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552679675b97c9_20440260',
  'variables' => 
  array (
    'parent_url' => 0,
    'parent_title' => 0,
    'title' => 0,
    'descr' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552679675b97c9_20440260')) {function content_552679675b97c9_20440260($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li><a href="/<?php echo $_smarty_tpl->tpl_vars['parent_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['parent_title']->value;?>
</a></li>
        <li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
    </ol>
</div>

<div class="col-lg-12 col-md-12 col-xs-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['descr']->value;?>
</h3>
            </div>
            <div class="panel-body" id="gallery_shuff">
                <div class="col-lg-12">
                    <div id="foo" class = "img_list img_list_items">

                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>

                            <div class="col-lg-3 col-md-4 col-xs-6 thumb" style="padding-top: 15px;">
                                <div>
                                    <a href="/images/<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
" class="img-thumbnail" data-gallery>
                                        <img class="img-responsive" src="/images/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
">
                                    </a>
                                </div>
                            </div>
             
                        <?php } ?>

                    </div>
                </div>

            </div>
            <div class="panel-footer"><a href="/<?php echo $_smarty_tpl->tpl_vars['parent_url']->value;?>
">Назад</a></div>

        </div>

</div>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Пред.
                    </button>
                    <button type="button" class="btn btn-primary next">
                        След.
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
