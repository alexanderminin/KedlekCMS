<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 20:25:25
         compiled from "templates\admin\galleryvideoadd.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17521552564859f3e39-34070599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8035ac9645e5775b8b3bc3f04fe124d1b61ccc5' => 
    array (
      0 => 'templates\\admin\\galleryvideoadd.page.tpl',
      1 => 1428513184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17521552564859f3e39-34070599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55256485a69150_03457590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55256485a69150_03457590')) {function content_55256485a69150_03457590($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-6">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Добавить видео</h3>
        </div>
        <form role="form" action="/admin/gallery/add" method="post">
            <div class="panel-body" id="gallery_add">
                

                    <div class="form-group">
                        <label>Ссылка на YouTube</label>
                        <input type="text" id="gallery_button_add" name="thumb" class="form-control" placeholder="Пример: jocClWzzgmk" autocomplete="off" required>
                    </div>


                    <div class="form-group">
                        <label>Дата</label>
                        <input type="text" id="pick_date" class="form-control date" name="datetime" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" placeholder="гггг.мм.дд" autocomplete="off">
                    </div>

                    <div class="form-group" >
                        <label>Заголовок</label>
                        <input type="text" id="add_title" class="form-control" name="title" placeholder="Название галереи" autocomplete="off" required>
                    </div>

                    <div class="form-group" >
                        <label>Описание</label>
                        <textarea id="add_descr" class="form-control" name="descr" rows="3"></textarea>
                    </div>

                    <input type=hidden name="type" value='2'>

            </div>
            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success">Добавить</button>
            </div>
        </form>
    </div>

</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
