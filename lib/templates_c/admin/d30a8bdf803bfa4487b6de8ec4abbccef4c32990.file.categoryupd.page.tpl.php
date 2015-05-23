<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-11 14:00:20
         compiled from "templates\admin\categoryupd.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6005528fec42c20e1-33232493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd30a8bdf803bfa4487b6de8ec4abbccef4c32990' => 
    array (
      0 => 'templates\\admin\\categoryupd.page.tpl',
      1 => 1428510356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6005528fec42c20e1-33232493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5528fec434ac88_35275255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5528fec434ac88_35275255')) {function content_5528fec434ac88_35275255($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form role="form" action="/admin/category/update_category" method="post">
    
    <input type="hidden" id="id_category" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Параметры категории</h3>
            </div>
            <div class="panel-body" id="category_param">

                <div class="form-group">
                    <label>Заголовок</label>
                    <input type="text" id="category_param_title" class="form-control" 
                    oninput="document.getElementById('seo_param_title').value=this.value;"
                    onkeydown="document.getElementById('seo_param_title').value=this.value;"
                    value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"
                    name="title" placeholder="Заголовок категории"  autocomplete="off" require>
                </div>

                <div class="form-group">
                    <label class="control-label">URL категории</label>
                    <input id="category_param_url" type="text" class="form-control" name="url" placeholder="catogorya" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" autocomplete="off" require>
                </div>

            </div>

            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success">Сохранить категорию</button>
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
                    <input id="seo_param_title" type="text" class="form-control" name="seo_title" placeholder="Заголовок страницы"  value="<?php echo $_smarty_tpl->tpl_vars['item']->value['seo_title'];?>
" autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <input id="seo_param_descr" type="text" class="form-control" name="seo_descr" placeholder="Краткое описание" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['seo_descr'];?>
" autocomplete="off">
                </div>

                <div class="form-group" id="seo_param_keywords">
                    <label>Ключевые слова</label><br/>
                    <input type="text" class="form-control" data-role="tagsinput" name="seo_keywords" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['seo_keywords'];?>
"  autocomplete="off">
                </div>

            </div>
        </div>
    </div>

</form>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
