<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 09:15:36
         compiled from "templates\admin\gallery_list.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179335558320809fa79-72961405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec373cff319dd3d28e2ec379ebc0124d3049846c' => 
    array (
      0 => 'templates\\admin\\gallery_list.page.tpl',
      1 => 1428750290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179335558320809fa79-72961405',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55583208101513_25056246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55583208101513_25056246')) {function content_55583208101513_25056246($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-12 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Список разделов галереи</h3>
        </div>
        <div class="panel-body" id="gallery_list">

              <table class="table table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Заголовок</th>
                    <th>Элементов</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

                  <tr>

                    <td><a href="/admin/gallerylist/gallery/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['count'];?>
</td>
                    <td>

                        <a href="/admin/gallerylist/updgallerylist/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-xs btn-warning">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        
                    </td>
                    <td>

                        <a href="/admin/gallerylist/del_gallery_list/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-xs btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                        
                    </td>
                  </tr>
                  <?php } ?>
                    
                </tbody>
              </table>
         
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
