<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-14 17:09:02
         compiled from "templates\admin\home.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129995526412ccdc5c9-48096246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd2843d4fae2842061309ee23436b89d82a2b9bf' => 
    array (
      0 => 'templates\\admin\\home.page.tpl',
      1 => 1429020540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129995526412ccdc5c9-48096246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5526412cd45d63_48918427',
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526412cd45d63_48918427')) {function content_5526412cd45d63_48918427($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-12 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Новые сообщения</h3>
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

                        <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=='1') {?>class="danger"<?php }?>
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
                  </tr>
                  <?php } ?>
                    
                </tbody>
              </table>
         

        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
