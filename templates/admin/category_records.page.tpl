{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<div class="col-lg-12 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><b>Категория: </b>{$category_title}</h3>
        </div>
        <div class="panel-body" id="records_list">

              <table class="table table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Заголовок</th>
                    <th>Дата</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
                  {foreach $items as $item}

                  <tr>

                    <td><a href="/admin/category/updrecord/{$item.id}">{$item.title}</td>
                    <td>{$item.datetime}</td>
                    <td>

                        <a href="/admin/category/delrecord/{$item.id}" class="btn btn-xs btn-danger">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                        
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