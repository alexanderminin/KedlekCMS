<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-11 14:04:52
         compiled from "templates\admin\gallerylist.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31555528b82249dbe5-06568768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9105d5cca88259623201b519477d257079b1717e' => 
    array (
      0 => 'templates\\admin\\gallerylist.page.tpl',
      1 => 1428750290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31555528b82249dbe5-06568768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5528b82252a607_76986704',
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5528b82252a607_76986704')) {function content_5528b82252a607_76986704($_smarty_tpl) {?>
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
