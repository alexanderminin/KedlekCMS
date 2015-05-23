<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-11 14:05:31
         compiled from "templates\admin\gallerylistupd.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7065528fffb180e53-65091985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4a18fc37953ca2e2b461cd27aeb6dc961ef319a' => 
    array (
      0 => 'templates\\admin\\gallerylistupd.page.tpl',
      1 => 1428750195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7065528fffb180e53-65091985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5528fffb221105_19156361',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5528fffb221105_19156361')) {function content_5528fffb221105_19156361($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form role="form" action="/admin/gallerylist/update_gallery_list" method="post">
    
    <input type="hidden" id="gallery_list_id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

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
                    value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"
                    name="title" placeholder="Заголовок категории"  autocomplete="off" require>
                </div>

                <div class="form-group">
                    <label class="control-label">URL раздела</label>
                    <input id="gallery_param_url" type="text" class="form-control" name="url" placeholder="razdel" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" autocomplete="off" require>
                </div>

            </div>

            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success">Сохранить раздел</button>
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
