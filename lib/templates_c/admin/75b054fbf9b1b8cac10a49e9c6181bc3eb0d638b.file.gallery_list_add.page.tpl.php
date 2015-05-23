<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 09:15:37
         compiled from "templates\admin\gallery_list_add.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31170555832098a6ae6-53344146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75b054fbf9b1b8cac10a49e9c6181bc3eb0d638b' => 
    array (
      0 => 'templates\\admin\\gallery_list_add.page.tpl',
      1 => 1428733059,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31170555832098a6ae6-53344146',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555832098f0e88_93163674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555832098f0e88_93163674')) {function content_555832098f0e88_93163674($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form role="form" action="/admin/gallerylist/add_gallery_list" method="post">
    

    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Параметры раздела галерии</h3>
            </div>
            <div class="panel-body" id="gallery_param">

                <div class="form-group">
                    <label>Заголовок</label>
                    <input type="text" id="gallery_param_title" class="form-control" 
                    oninput="document.getElementById('seo_param_title').value=this.value;"
                    onkeydown="document.getElementById('seo_param_title').value=this.value;"
                    name="title" placeholder="Заголовок категории"  autocomplete="off" require>
                </div>

                <div class="form-group">
                    <label class="control-label">URL раздела</label>
                    <input id="gallery_param_url" type="text" class="form-control" name="url" placeholder="razdel" autocomplete="off" require>
                </div>

            </div>

            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success" disabled="disabled">Добавить раздел</button>
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
                    <input id="seo_param_title" type="text" class="form-control" name="seo_title" placeholder="Заголовок раздела"  autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <input id="seo_param_descr" type="text" class="form-control" name="seo_descr" placeholder="Краткое раздела"  autocomplete="off">
                </div>

                <div class="form-group" id="seo_param_keywords">
                    <label>Ключевые слова</label><br/>
                    <input type="text" class="form-control" data-role="tagsinput" name="seo_keywords" autocomplete="off">
                </div>

            </div>
        </div>
    </div>

</form>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
