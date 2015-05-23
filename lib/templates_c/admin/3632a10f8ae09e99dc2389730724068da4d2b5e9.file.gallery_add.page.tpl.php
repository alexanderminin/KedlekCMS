<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 09:15:38
         compiled from "templates\admin\gallery_add.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91715558320ad17b05-08498695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3632a10f8ae09e99dc2389730724068da4d2b5e9' => 
    array (
      0 => 'templates\\admin\\gallery_add.page.tpl',
      1 => 1429702327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91715558320ad17b05-08498695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'date' => 0,
    'gallery_list' => 0,
    'gallery' => 0,
    'site_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5558320ad795a3_69345491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5558320ad795a3_69345491')) {function content_5558320ad795a3_69345491($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div id="file_manager"></div>
<form role="form" action="/admin/gallerylist/add" method="post">

    <div class="col-lg-6 col-md-6 col-xs-12">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Создать галерею</h3>
            </div>
            <div class="panel-body" id="gallery_add">

                <div class="form-group">
                    <label>Обложка</label>
                    <div class="input-group" id="gallery_button_add">
                        <input type="text" id="fieldID1" name="file" class="form-control" placeholder="Выбрать обложку..."  readonly>
                        <span class="input-group-btn">
                            <a data-toggle="modal" class="btn btn-primary" data-target="#myModal">Выбрать</a>
                        </span>
                    </div>
                </div>


                <div class="form-group" >
                    <label>Дата</label>
                    <input id="pick_date" type="text" class="form-control date" name="datetime" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" placeholder="гггг.мм.дд" autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Заголовок</label>
                    <input id="add_title" type="text" class="form-control" name="title"
                    oninput="document.getElementById('seo_param_title').value=this.value;"
                    onkeydown="document.getElementById('seo_param_title').value=this.value;"
                    placeholder="Название галереи" autocomplete="off" required>
                </div>

                <div class="form-group">
                    <label class="control-label">URL альбома</label>
                    <input id="add_url" type="text" class="form-control" name="url" placeholder="albom" autocomplete="off" require>
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
" ><?php echo $_smarty_tpl->tpl_vars['gallery']->value['title'];?>
</option>

                        <?php } ?>

                    </select>

                </div>

                <div class="form-group" >
                    <label>Описание</label>
                    <textarea id="add_descr" class="form-control"
                    oninput="document.getElementById('seo_param_descr').value=this.value;"
                    onkeydown="document.getElementById('seo_param_descr').value=this.value;"
                    name="descr" rows="3"></textarea>
                </div>

                <input type=hidden name="type" value='1'>

            </div>

            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success dsbd" disabled="disabled">Добавить</button>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">SEO настройки</h3>
            </div>
            <div class="panel-body" id="seo_param">

                <div class="form-group">
                    <label>Заголовок</label>
                    <input id="seo_param_title" type="text" class="form-control" name="seo_title" placeholder="Заголовок страницы"  autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <input id="seo_param_descr" type="text" class="form-control" name="seo_descr" placeholder="Краткое описание"  autocomplete="off">
                </div>

                <div class="form-group" id="seo_param_keywords">
                    <label>Ключевые слова</label><br/>
                    <input type="text" class="form-control" data-role="tagsinput" name="seo_keywords" autocomplete="off">
                </div>

            </div>
        </div>
    </div>

</form>

<div class="modal fade myModal" id="myModal">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Файловый менеджер</h4>
    </div>
    <div class="modal-body" style="padding:0px; margin: 0px; width: 100%;">
      <iframe width="100%" height="400" src="/filemanager/dialog.php?type=1&relative_url=1&field_id=fieldID1&width=<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['thumb_gallery_width'];?>
&height=<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['thumb_gallery_height'];?>
" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
    </div>
  </div>
</div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
