<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 19:03:59
         compiled from "templates\admin\pages.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108445525513d0846c1-94415077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5084d63b6cc8254d11d21f0f673c37fdb07271f' => 
    array (
      0 => 'templates\\admin\\pages.page.tpl',
      1 => 1428509036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108445525513d0846c1-94415077',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5525513d120af0_19660461',
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5525513d120af0_19660461')) {function content_5525513d120af0_19660461($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-12 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Список страниц</h3>
        </div>
        <div class="panel-body" id="page_list">

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

                    <td><a href="/admin/pages/page/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['datetime'];?>
</td>
                    <td>

                        <a href="/admin/pages/del/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
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
