<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 18:29:35
         compiled from "templates\admin\messages.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63325525495fd35da9-12127243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b2536729edfac1ed080559346be30e5a821d43b' => 
    array (
      0 => 'templates\\admin\\messages.page.tpl',
      1 => 1428506937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63325525495fd35da9-12127243',
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
  'unifunc' => 'content_5525495fe8d9f7_58858700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5525495fe8d9f7_58858700')) {function content_5525495fe8d9f7_58858700($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-12 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Сообщения</h3>
        </div>
        <div class="panel-body" id="messages">

         
              <table id="card-table" class="table table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Тип</th>
                    <th>Имя</th>
                    <th>Сообщения</th>
                    <th>Телефон</th>
                    <th>Время</th>
                    <th>Ред.</th>
                  </tr>
                </thead>
                <tbody>
                
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

                  <tr 
                      <?php if ($_smarty_tpl->tpl_vars['item']->value['mark_read']!='2') {?> 

                        <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='1') {?>class="warning"<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='2') {?>class="info"<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='3') {?>class="success"<?php }?>

                      <?php }?>
                  >
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='1') {?>Обратная связь<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='2') {?>Вопрос<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='3') {?>Заказ<?php }?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['text'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['datetime'];?>
</td>
                    <td>
                        <a href="/admin/messages/del/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-xs btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['mark_read']==1) {?>
                        <a href="/admin/messages/read/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-xs btn-warning read-button">
                            <span class="glyphicon glyphicon-check"></span>
                        </a>
                        <?php }?>

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
