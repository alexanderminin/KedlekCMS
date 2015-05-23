<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 20:34:25
         compiled from "templates\admin\galleryupd.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20024552566a13e4928-30588396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a8b595dd34a6c2d939c2e40fa931454eb69207d' => 
    array (
      0 => 'templates\\admin\\galleryupd.page.tpl',
      1 => 1428514461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20024552566a13e4928-30588396',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'items' => 0,
    'i' => 0,
    'g_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552566a14b7856_70716622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552566a14b7856_70716622')) {function content_552566a14b7856_70716622($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-6 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Редактировать альбом</h3>
        </div>
        <div class="panel-body" id="gallery_edit">
            <form role="form" action="/admin/gallery/update" method="post">

                <div class="form-group">
                    <label>Обложка</label>
                    <div class="input-group">
                        <input type="text" id="fieldID1" name="thumb" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
" placeholder="Выбрать обложку..." readonly>
                        <span class="input-group-btn">
                            <a data-toggle="modal" class="btn btn-primary" data-target="#myModal">Выбрать другую обложку</a>
                        </span>
                    </div>
                </div>


                <div class="form-group">
                    <label>Дата</label>
                    <input type="text" class="form-control date" name="datetime" value="$item.datetime}" placeholder="гггг.мм.дд" autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Заголовок</label>
                    <input type="text" class="form-control" name="title" placeholder="Название галереи" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"  autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <textarea class="form-control" name="descr" rows="3"><?php echo $_smarty_tpl->tpl_vars['item']->value['descr'];?>
</textarea>
                </div>

                <input type=hidden name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

                <button type="submit" class="btn btn-danger">Обновить</button>

            </form>

            <div class="modal fade myModal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Файловый менеджер</h4>
                </div>
                <div class="modal-body" style="padding:0px; margin: 0px; width: 100%;">
                  <iframe width="100%" height="400" src="/filemanager/dialog.php?type=1&relative_url=1&field_id=fieldID1" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
              </div>
            </div>
            </div>

        </div>
    </div>

</div>

<div class="col-lg-6 col-md-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Обложка альбома</h3>
        </div>
        <div class="panel-body" id="gallery_image">
            <div class="img-thumbnail thumb-div" >
                <img class="img-responsive thumb-img" src="/thumb/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
            </div>
        </div>
    </div>
</div>


<div class="col-lg-12 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Добавить элемент</h3>
        </div>
        <div class="panel-body" >
            <form role="form" action="/admin/gallery/itemadd" method="post">

                <div class="form-group">
                    <div class="input-group" id="gallery_add">
                        <input type="text" id="fieldID2" name="file" class="form-control" placeholder="Выбрать фото..."  readonly>
                        <input type=hidden name="g_id" value="<?php echo '<?'; ?>
=$g_id;<?php echo '?>'; ?>
">
                        <span class="input-group-btn">
                            <a data-toggle="modal" class="btn btn-primary" data-target="#myModal2">Выбрать</a>
                            <button type="submit" class="btn btn-success dsbd" disabled="disabled">Добавить</button>
                        </span>
                    </div>
                </div>

            </form>

            <div class="modal fade myModal" id="myModal2">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Файловый менеджер</h4>
                </div>
                <div class="modal-body" style="padding:0px; margin: 0px; width: 100%;">
                  <iframe width="100%" height="400" src="/filemanager/dialog.php?type=1&relative_url=1&field_id=fieldID2" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                </div>
              </div>
            </div>
            </div>

        </div>
    </div>

    <div id="file_manager"></div>

</div>




<div class="col-lg-12 col-md-12 col-xs-12">

    <form role="form" action="/admin/gallery/itemsupdate" method="post">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Порядок элементов</h3>
            </div>
            <div class="panel-body" id="gallery_shuff">
                <div data-force="30" class="col-lg-12">
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
                                        <img class="img-responsive" src="/thumb/<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
" alt="Banana">
                                    </a>
                                    <a href="/admin/gallery/delitem/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-danger btn-circle" style="position: absolute; top: 5px; right:0px; "><i class="fa fa-trash-o"></i></a>
                                </div>
                                <input type="hidden" name="position[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][g_id]" value="<?php echo $_smarty_tpl->tpl_vars['g_id']->value;?>
">
                                <input type="hidden" name="position[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][id]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                <input type="hidden" class="new_value" name="position[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][ord]" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['ord'];?>
">
                            </div>
             
                        <?php } ?>

                    </div>
                </div>

            </div>

            <div class="modal-footer">
                <span id="gallery_button_upd"><button type="submit" class="btn btn-danger">Сохранить новый порядок</button></span>
            </div>

        </div>
    </form>

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
