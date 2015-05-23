{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

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
                
                  {foreach $items as $item}
                  <tr>
                    <td>{$item.login}</td>
                    <td>{$item.fio}</td>
                    <td>{$item.role}</td>
                    <td>
                        <a href="/admin/users/user/{$item.id}" class="btn btn-xs btn-danger">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        {if $user_id != $item.id}
                        <a href="/admin/users/del/{$item.id}" class="btn btn-xs btn-warning">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                        {/if}
                    </td>
                  </tr>
                  {/foreach}
                    
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

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}