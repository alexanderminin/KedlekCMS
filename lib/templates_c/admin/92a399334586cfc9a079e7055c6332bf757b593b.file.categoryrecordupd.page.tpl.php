<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 19:51:35
         compiled from "templates\admin\categoryrecordupd.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2558255255c97be3957-60300685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92a399334586cfc9a079e7055c6332bf757b593b' => 
    array (
      0 => 'templates\\admin\\categoryrecordupd.page.tpl',
      1 => 1428511878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2558255255c97be3957-60300685',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
    'category' => 0,
    'cat' => 0,
    'date' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55255c97caeb88_85594375',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55255c97caeb88_85594375')) {function content_55255c97caeb88_85594375($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<form role="form" action="/admin/category/update_record" method="post">

    <input type="hidden" id="record_id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

    <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Параметры записи</h3>
            </div>
            <div class="panel-body" id="record_param">

                <div class="form-group">
                    <label>Заголовок</label>
                    <input type="text" id="record_param_title" class="form-control" 
                    oninput="document.getElementById('seo_param_title').value=this.value;"
                    onkeydown="document.getElementById('seo_param_title').value=this.value;"
                    name="title" placeholder="Заголовок записи" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" autocomplete="off" require>
                </div>

                <div class="form-group">
                    <label class="control-label">Категория</label>

                    <select class="form-control" name="category_id" id="record_param_category">

                        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['category']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>

                            <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
 <?php if ($_smarty_tpl->tpl_vars['item']->value['category_id']==$_smarty_tpl->tpl_vars['cat']->value['id']) {?> selected <?php }?>>" ><?php echo $_smarty_tpl->tpl_vars['cat']->value['title'];?>
</option>

                        <?php } ?>

                    </select>

                </div>


                <div class="form-group" id="record_param_datetime">
                    <label>Дата и время</label>
                    <input type="text" id="pick_date" class="form-control date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
">
                    <input type="text" id="pick_time" class="form-control time" style="margin-top: 10px;" name="time" value="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
">
                </div>

                <div class="form-group">
                    <label class="control-label">URL записи</label>
                    <input id="record_param_url" type="text" class="form-control" name="url" placeholder="zapis" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" autocomplete="off" require>
                </div>

                <div class="form-group">
                    <label>Миниатюра</label>
                    <div class="input-group" id="record_param_file">
                        <input type="text" id="fieldID1" name="file" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
" class="form-control" placeholder="Выбрать миниатюру..." readonly>
                        <span class="input-group-btn">
                            <a data-toggle="modal" class="btn btn-primary" data-target="#myModal">Выбрать миниатюру</a>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>

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

    <div class="col-lg-4 col-md-4 col-xs-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">SEO настройки</h3>
            </div>
            <div class="panel-body" id="seo_param">

                <div class="form-group">
                    <label>Заголовок</label>
                    <input id="seo_param_title" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['seo_title'];?>
" name="seo_title" placeholder="Заголовок страницы"  autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <input id="seo_param_descr" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['seo_descr'];?>
" name="seo_descr" placeholder="Краткое описание"  autocomplete="off">
                </div>

                <div class="form-group" id="seo_param_keywords">
                    <label>Ключевые слова</label><br/>
                    <input type="text" class="form-control" data-role="tagsinput" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['seo_keywords'];?>
" name="seo_keywords" autocomplete="off">
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Миниатюра записи</h3>
            </div>
            <div class="panel-body" id="gallery_image">
                <div class="img-thumbnail thumb-div" >
                    <img class="img-responsive thumb-img" src="/thumb/<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">Описание записи</h3>
            </div>
            <div class="panel-body" id="record_param_decr">

                <textarea id="page_param_descr" class="form-control moxiecut2" name="descr" rows="5"><?php echo $_smarty_tpl->tpl_vars['item']->value['descr'];?>
</textarea>

            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Содержимое записи</h3>
            </div>
            <div class="panel-body" id="record_text">   
                <textarea class="form-control moxiecut" name="text" rows="10"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</textarea>
            </div>
            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success">Сохранить запись</button>
            </div>
        </div>
    </div>

</form>



<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
