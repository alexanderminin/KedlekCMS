<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 15:56:42
         compiled from "templates\admin\galleryvideoupd.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2044552b2c80d64a56-61160451%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0e40dde8ad57560106ee53e0b04f17ec941c76' => 
    array (
      0 => 'templates\\admin\\galleryvideoupd.page.tpl',
      1 => 1429704133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2044552b2c80d64a56-61160451',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552b2c80e3f689_41191579',
  'variables' => 
  array (
    'item' => 0,
    'gallery_list' => 0,
    'gallery' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b2c80e3f689_41191579')) {function content_552b2c80e3f689_41191579($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Редактировать видео</h3>
        </div>
        <form role="form" action="/admin/gallerylist/update_video" method="post">
            <div class="panel-body" id="gallery_add">

                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                
                    <div class="form-group">
                        <label>Ссылка на YouTube</label>
                        <input type="text" id="gallery_button_add" name="file" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
" class="form-control" placeholder="Пример: jocClWzzgmk" autocomplete="off" required>
                    </div>


                    <div class="form-group">
                        <label>Дата</label>
                        <input type="text" id="pick_date" class="form-control date" name="datetime" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['datetime'];?>
" placeholder="гггг.мм.дд" autocomplete="off">
                    </div>

                    <div class="form-group" >
                        <label>Заголовок</label>
                        <input type="text" id="add_title" class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" placeholder="Название видео" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Галерея</label>

                        <select class="form-control" name="gallery_list_id" id="gallery_param_gallery_list">

                            <?php  $_smarty_tpl->tpl_vars['gallery'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['gallery']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gallery_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['gallery']->key => $_smarty_tpl->tpl_vars['gallery']->value) {
$_smarty_tpl->tpl_vars['gallery']->_loop = true;
?>

                                <option value="<?php echo $_smarty_tpl->tpl_vars['gallery']->value['id'];?>
"  <?php if ($_smarty_tpl->tpl_vars['item']->value['gallery_list_id']==$_smarty_tpl->tpl_vars['gallery']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['gallery']->value['title'];?>
</option>

                            <?php } ?>

                        </select>

                    </div>

                    <div class="form-group" >
                        <label>Описание</label>
                        <textarea id="add_descr" class="form-control" name="descr" rows="3"><?php echo $_smarty_tpl->tpl_vars['item']->value['descr'];?>
</textarea>
                    </div>

                    <input type=hidden name="type" value='2'>

            </div>
            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success">Обновить</button>
            </div>
        </form>
    </div>

</div>

<div class="col-lg-6 col-md-6 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Видео</h3>
        </div>
        <div class="panel-body" id="gallery_current">

            <div class="thumbnail">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item"  id="thumb_view" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
?hd=1&rel=0" allowfullscreen></iframe>
                </div>
            </div>

        </div>
    </div>

</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
