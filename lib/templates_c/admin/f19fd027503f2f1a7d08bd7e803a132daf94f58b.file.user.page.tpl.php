<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-26 08:55:36
         compiled from "templates\admin\user.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10932553c7dd89f1e32-57787567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f19fd027503f2f1a7d08bd7e803a132daf94f58b' => 
    array (
      0 => 'templates\\admin\\user.page.tpl',
      1 => 1428508031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10932553c7dd89f1e32-57787567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553c7dd8c37f43_15920151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553c7dd8c37f43_15920151')) {function content_553c7dd8c37f43_15920151($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-6 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Редактировать профиль</h3>
        </div>
        <div class="panel-body">
            <form role="form" action="/admin/users/update" method="post">

                <div class="form-group">
                    <label>Логин</label>
                    <input type="text" class="form-control" name="new_login" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['login'];?>
" autocomplete="off">
                </div>

                <input type="hidden" name="login" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['login'];?>
">

                <div class="form-group">
                    <label>ФИО</label>
                    <input type="text" class="form-control" name="fio" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['fio'];?>
"  autocomplete="off">
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="mail" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['mail'];?>
" placeholder="mail@mail.ru" autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Роль</label>
                    <select class="form-control" name="role">
                        <option value="admin" <?php if ($_smarty_tpl->tpl_vars['item']->value['role']=='admin') {?> selected <?php }?>>Администратор</option>
                        <option value="user" <?php if ($_smarty_tpl->tpl_vars['item']->value['role']=='user') {?> selected <?php }?>>Пользователь</option>
                    </select>
                </div>

                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

                <a data-toggle="modal" class="btn btn-danger" data-target="#myModal">Редактировать пароль</a>
                
                <button type="submit" class="btn btn-warning">Обновить</button>

            </form>
        </div>
    </div>
</div>

<div class="modal fade myModal" id="myModal">
    <div class="modal-dialog">

        <div class="modal-content">
            
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Изменить пароль</h4>
                </div>
                <form role="form" action="/admin/users/updatepass" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

                    <div class="form-group">
                        <label>Старый пароль</label>
                        <input type="password" class="form-control" name="old_pass" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Новый пароль</label>
                        <input type="text" class="form-control" name="new_pass" autocomplete="off">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-danger">Изменить</button>
                </div>
                </form>
            
        </div>
        
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
