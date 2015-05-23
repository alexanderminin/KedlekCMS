{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<div class="col-lg-6 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Редактировать профиль</h3>
        </div>
        <div class="panel-body">
            <form role="form" action="/admin/users/update" method="post">

                <div class="form-group">
                    <label>Логин</label>
                    <input type="text" class="form-control" name="new_login" value="{$item.login}" autocomplete="off">
                </div>

                <input type="hidden" name="login" value="{$item.login}">

                <div class="form-group">
                    <label>ФИО</label>
                    <input type="text" class="form-control" name="fio" value="{$item.fio}"  autocomplete="off">
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="text" class="form-control" name="mail" value="{$item.mail}" placeholder="mail@mail.ru" autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Роль</label>
                    <select class="form-control" name="role">
                        <option value="admin" {if $item.role == 'admin'} selected {/if}>Администратор</option>
                        <option value="user" {if $item.role == 'user'} selected {/if}>Пользователь</option>
                    </select>
                </div>

                <input type="hidden" name="id" value="{$item.id}">

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
                    <input type="hidden" name="id" value="{$item.id}">

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

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}