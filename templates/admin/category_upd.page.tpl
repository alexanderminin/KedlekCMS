{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<form role="form" action="/admin/category/update_category" method="post">
    
    <input type="hidden" id="id_category" name="id" value="{$item.id}">

    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Параметры категории</h3>
            </div>
            <div class="panel-body" id="category_param">

                <div class="form-group">
                    <label>Заголовок</label>
                    <input type="text" id="category_param_title" class="form-control" 
                    oninput="document.getElementById('seo_param_title').value=this.value;"
                    onkeydown="document.getElementById('seo_param_title').value=this.value;"
                    value="{$item.title}"
                    name="title" placeholder="Заголовок категории"  autocomplete="off" require>
                </div>

                <div class="form-group">
                    <label class="control-label">URL категории</label>
                    <input id="category_param_url" type="text" class="form-control" name="url" placeholder="catogorya" value="{$item.url}" autocomplete="off" require>
                </div>

            </div>

            <div class="modal-footer">
                <button id="add_button" type="submit" class="btn btn-success">Сохранить категорию</button>
            </div>

        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-xs-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">SEO настройки</h3>
            </div>
            <div class="panel-body" id="seo_param">

                <div class="form-group">
                    <label>Заголовок</label>
                    <input id="seo_param_title" type="text" class="form-control" name="seo_title" placeholder="Заголовок страницы"  value="{$item.seo_title}" autocomplete="off">
                </div>

                <div class="form-group">
                    <label>Описание</label>
                    <input id="seo_param_descr" type="text" class="form-control" name="seo_descr" placeholder="Краткое описание" value="{$item.seo_descr}" autocomplete="off">
                </div>

                <div class="form-group" id="seo_param_keywords">
                    <label>Ключевые слова</label><br/>
                    <input type="text" class="form-control" data-role="tagsinput" name="seo_keywords" value="{$item.seo_keywords}"  autocomplete="off">
                </div>

            </div>
        </div>
    </div>

</form>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}