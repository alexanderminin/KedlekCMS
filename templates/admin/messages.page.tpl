{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

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
                
                  {foreach $items as $item}

                  <tr 
                      {if $item.mark_read != '2'} 

                        {if $item.type == '1'}class="success"{/if}
                        {if $item.type == '2'}class="info"{/if}

                      {/if}
                  >
                    <td>
                        {if $item.type == '1'}Обратная связь{/if}
                        {if $item.type == '2'}Вопрос{/if}
                    </td>
                    <td>{$item.name}</td>
                    <td>{$item.text}</td>
                    <td>{$item.phone}</td>
                    <td>{$item.datetime}</td>
                    <td>
                        <a href="/admin/messages/del/{$item.id}" class="btn btn-xs btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                        {if $item.mark_read == 1}
                        <a href="/admin/messages/read/{$item.id}" class="btn btn-xs btn-warning read-button">
                            <span class="glyphicon glyphicon-check"></span>
                        </a>
                        {/if}

                    </td>
                  </tr>
                  {/foreach}
                    
                </tbody>
              </table>
         

        </div>
    </div>
</div>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}