<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 12:13:18
         compiled from "templates\admin\users.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1017955585baecdbfd3-76128292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9be086a28dbcbf8704c8aa2630a07a76d282d1f' => 
    array (
      0 => 'templates\\admin\\users.page.tpl',
      1 => 1428507651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1017955585baecdbfd3-76128292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'user_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55585baed4d468_16193360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55585baed4d468_16193360')) {function content_55585baed4d468_16193360($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-12 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Пользователи</h3>
        </div>
        <div class="panel-body">

            
              <table id="card-table" class="table table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Логин</th>
                    <th>ФИО</th>
                    <th>Роль</th>
                    <th>Управление</th>
                  </tr>
                </thead>
                <tbody>
                
                  <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['login'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['fio'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['role'];?>
</td>
                    <td>
                        <a href="/admin/users/user/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-xs btn-danger">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <?php if ($_smarty_tpl->tpl_vars['user_id']->value!=$_smarty_tpl->tpl_vars['item']->value['id']) {?>
                        <a href="/admin/users/del/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-xs btn-warning">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                        <?php }?>
                    </td>
                  </tr>
                  <?php } ?>
                    
                </tbody>
              </table>

        </div>
        <div class="panel-footer">
            <a data-toggle="modal" class="btn btn-success" data-target="#myModal">Добавить пользователя</a>
        </div>
    </div>
</div>


<div class="modal fade myModal" id="myModal">
    <div class="modal-dialog">

        <div class="modal-content">
            
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Добавить пользователя</h4>
                </div>
                <form role="form" action="/users/add" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Логин</label>
                        <input type="text" class="form-control" name="login" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Пароль</label>
                        <input type="text" class="form-control" name="password" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>ФИО</label>
                        <input type="text" class="form-control" name="fio"  autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" name="mail" placeholder="mail@mail.ru" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Роль</label>
                        <select class="form-control" name="role">
                            <option value="admin">Администратор</option>
                            <option value="user">Пользователь</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-success">Добавить</button>
                </div>
                </form>
            
        </div>
        
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
