{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

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
                
                  {foreach $items as $item}

                  <tr 
                      {if $item.mark_read != '2'} 

                        {if $item.type == '1'}class="danger"{/if}
                        {if $item.type == '2'}class="info"{/if}
                        {if $item.type == '3'}class="success"{/if}

                      {/if}
                  >
                    <td>
                        {if $item.type == '1'}Обратная связь{/if}
                        {if $item.type == '2'}Вопрос{/if}
                        {if $item.type == '3'}Заказ{/if}
                    </td>
                    <td>{$item.name}</td>
                    <td>{$item.text}</td>
                    <td>{$item.phone}</td>
                    <td>{$item.datetime}</td>
                  </tr>
                  {/foreach}
                    
                </tbody>
              </table>
         

        </div>
    </div>
</div>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}