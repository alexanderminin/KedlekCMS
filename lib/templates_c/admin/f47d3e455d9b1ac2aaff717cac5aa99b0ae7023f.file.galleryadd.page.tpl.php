<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 20:25:23
         compiled from "templates\admin\galleryadd.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251125525648373c169-96559350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f47d3e455d9b1ac2aaff717cac5aa99b0ae7023f' => 
    array (
      0 => 'templates\\admin\\galleryadd.page.tpl',
      1 => 1428513299,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251125525648373c169-96559350',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552564837b1481_57235010',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552564837b1481_57235010')) {function content_552564837b1481_57235010($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-6">

<div id="file_manager"></div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Создать галерею</h3>
        </div>
        <form role="form" action="/admin/gallery/add" method="post">
            <div class="panel-body" id="gallery_add">


            
                <div class="form-group">
                    <label>Обложка</label>
                    <div class="input-group" id="gallery_button_add">
                        <input type="text" id="fieldID1" name="thumb" class="form-control" placeholder="Выбрать обложку..."  readonly>
                        <span class="input-group-btn">
                            <a data-toggle="modal" class="btn btn-primary" data-target="#myModal">Выбрать обложку</a>
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
                    <input id="add_title" type="text" class="form-control" name="title" placeholder="Название галереи" autocomplete="off" required>
                </div>

                <div class="form-group" >
                    <label>Описание</label>
                    <textarea id="add_descr" class="form-control" name="descr" rows="3"></textarea>
                </div>

                <input type=hidden name="type" value='1'>

            </div>

            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success dsbd" disabled="disabled">Добавить</button>
            </div>

        </form>

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


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
