<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 19:35:46
         compiled from "templates\admin\categoryrecords.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25287552558e2f0f096-51778209%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d3a9262baa5ca86de73e628151568658dc312a6' => 
    array (
      0 => 'templates\\admin\\categoryrecords.page.tpl',
      1 => 1428510892,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25287552558e2f0f096-51778209',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category_title' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552558e30613b3_45718704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552558e30613b3_45718704')) {function content_552558e30613b3_45718704($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-12 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><b>Категория: </b><?php echo $_smarty_tpl->tpl_vars['category_title']->value;?>
</h3>
        </div>
        <div class="panel-body" id="records_list">

              <table class="table table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Заголовок</th>
                    <th>Дата</th>
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

                    <td><a href="/admin/category/updrecord/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['datetime'];?>
</td>
                    <td>

                        <a href="/admin/category/delrecord/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
