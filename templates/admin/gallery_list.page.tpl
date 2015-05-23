{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<div class="col-lg-12 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Список разделов галереи</h3>
        </div>
        <div class="panel-body" id="gallery_list">

              <table class="table table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Заголовок</th>
                    <th>Элементов</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                
                  {foreach $items as $item}

                  <tr>

                    <td><a href="/admin/gallerylist/gallery/{$item.id}">{$item.title}</td>
                    <td>{$item.count}</td>
                    <td>

                        <a href="/admin/gallerylist/updgallerylist/{$item.id}" class="btn btn-xs btn-warning">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        
                    </td>
                    <td>

                        <a href="/admin/gallerylist/del_gallery_list/{$item.id}" class="btn btn-xs btn-danger">
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