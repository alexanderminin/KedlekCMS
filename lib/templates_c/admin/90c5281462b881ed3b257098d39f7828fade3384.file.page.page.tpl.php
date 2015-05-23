<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-13 05:11:42
         compiled from "templates\admin\page.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4425552b25de1ea824-56500376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90c5281462b881ed3b257098d39f7828fade3384' => 
    array (
      0 => 'templates\\admin\\page.page.tpl',
      1 => 1428508841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4425552b25de1ea824-56500376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552b25de2e86d0_31984781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552b25de2e86d0_31984781')) {function content_552b25de2e86d0_31984781($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<form role="form" action="/admin/pages/update" method="post">
    
    <input type="hidden" id="id_page" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Параметры страницы</h3>
            </div>
            <div class="panel-body" id="page_param">

                <div class="form-group">
                    <label>Заголовок</label>
                    <input type="text" id="page_param_title" class="form-control" 
                    oninput="document.getElementById('seo_param_title').value=this.value;"
                    onkeydown="document.getElementById('seo_param_title').value=this.value;"
                    value="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
"
                    name="title" placeholder="Заголовок страницы"  autocomplete="off" require>
                </div>

                <div class="form-group">
                    <label>URL страницы</label>
                    <input id="page_param_url" type="text" class="form-control" name="url" placeholder="stranica" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"  autocomplete="off" require>
                </div>

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
                    <input id="seo_param_title" type="text" class="form-control" name="seo_title" placeholder="Заголовок страницы" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['seo_title'];?>
"  autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <input id="seo_param_descr" type="text" class="form-control" name="seo_descr" placeholder="Заголовок страницы" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['seo_descr'];?>
"  autocomplete="off">
                </div>

                <div class="form-group" id="seo_param_keywords">
                    <label>Ключевые слова</label><br/>
                    <input type="text" class="form-control" data-role="tagsinput" name="seo_keywords" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['seo_keywords'];?>
"  autocomplete="off">
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Содержимое страницы</h3>
            </div>
            <div class="panel-body" id="page_text">   
                <textarea class="form-control moxiecut" name="text" rows="3"><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</textarea>
            </div>
            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success">Сохранить страницу</button>
            </div>
        </div>
    </div>

</form>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
