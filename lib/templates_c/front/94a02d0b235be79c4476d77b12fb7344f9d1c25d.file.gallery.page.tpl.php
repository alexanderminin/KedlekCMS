<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 11:47:48
         compiled from "templates\front\default\gallery.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3734555855b4cfd269-52706922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94a02d0b235be79c4476d77b12fb7344f9d1c25d' => 
    array (
      0 => 'templates\\front\\default\\gallery.page.tpl',
      1 => 1431684025,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3734555855b4cfd269-52706922',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555855b4d6a880_47961357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555855b4d6a880_47961357')) {function content_555855b4d6a880_47961357($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<aside class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li><a href="/<?php echo $_smarty_tpl->tpl_vars['parent_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['parent_title']->value;?>
</a></li>
        <li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
    </ol>
</aside>

<section class="col-lg-12 col-md-12 col-xs-12">

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
                        <article>
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
                        </article>
         
                    <?php } ?>

                </div>
            </div>

        </div>
        <div class="panel-footer"><a href="/<?php echo $_smarty_tpl->tpl_vars['parent_url']->value;?>
">Назад</a></div>

    </div>

</section>

<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
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
