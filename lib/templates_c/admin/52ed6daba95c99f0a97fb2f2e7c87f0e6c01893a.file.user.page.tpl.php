<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 18:47:13
         compiled from "templates\admin\user.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3242655254d0a652e45-81182779%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52ed6daba95c99f0a97fb2f2e7c87f0e6c01893a' => 
    array (
      0 => 'templates\\admin\\user.page.tpl',
      1 => 1428508031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3242655254d0a652e45-81182779',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55254d0a6fec63_09460093',
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55254d0a6fec63_09460093')) {function content_55254d0a6fec63_09460093($_smarty_tpl) {?>
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
