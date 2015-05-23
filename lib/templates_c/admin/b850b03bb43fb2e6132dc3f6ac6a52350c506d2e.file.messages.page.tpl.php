<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-14 17:07:30
         compiled from "templates\admin\messages.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5999552be5ed4835b7-11755293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b850b03bb43fb2e6132dc3f6ac6a52350c506d2e' => 
    array (
      0 => 'templates\\admin\\messages.page.tpl',
      1 => 1428985074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5999552be5ed4835b7-11755293',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552be5ed552660_39416882',
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552be5ed552660_39416882')) {function content_552be5ed552660_39416882($_smarty_tpl) {?>
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
