{*подключаем шапку шаблона*}
{include file='header.inc.tpl'}

<div class="col-lg-6 col-md-6 col-xs-12">

    <div class="col-lg-12 col-md-12 col-xs-12">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Добавить пункт меню</h3>
            </div>
            <div class="panel-body" id="menu_add_section">

                <form role="form" action="/admin/menu/add" method="post">

                    <div class="form-group">
                        <label>Заголовок</label>
                        <input type="text" class="form-control" id="menu_add_section_title_input" name="title" placeholder="Название пункта меню" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Ссылка</label>

                        <select class="form-control" id="menu_add_section_adr_input" name="target">
                            
                            <option value="notvalue">-- Список ссылок --</option>
                            
                            {$targets}

                            <optgroup label="Спец. страницы">
                                <option value="/home">Главная</option>
                                <option value="/contact">Контакты</option>
                            </optgroup>

                            <optgroup label="Другое">
                                <option value="myself">Своя ссылка</option>
                                <option value="#">Разделитель меню</option>
                            </optgroup>


                        </select>

                    </div>

                    <button id="menu_add_section_button_add" type="submit" class="btn btn-success" disabled="disabled">Добавить</button>

                </form>

            </div>
        </div>

    </div>

    <div class="col-lg-12 col-md-12 col-xs-12">

        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Доступные пункты меню</h3>
            </div>
            <div class="panel-body" id="menu_not_active_area">

                <div class="dd" id="nestable2">

                    {if count($menu_list) == 0}

                        <div class="dd-empty"></div>
                    
                    {else}

                        <ol class="dd-list">
                            {foreach $menu_list as $item}

                                <li class="dd-item dd3-item" data-id="{$item.id}">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">
                                        {if $item.target != '#'}
                                            <a href="{$item.target}" target="_blanc">{$item.title}</a>
                                        {else}
                                            {$item.title}
                                        {/if}
                                        <a href="/admin/menu/del/{$item.id}" class="btn btn-danger btn-circle" style="float: right; margin-right:5px;"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </li>

                            {/foreach}
                        </ol>

                    {/if}
                </div>
            </div>
        </div>
    </div>

</div>

<div class="col-lg-6 col-md-6 col-xs-12">

    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Активные пункты меню</h3>
            </div>
            <div class="panel-body" id="menu_active_area">

                <div class="dd" id="nestable">

                    {if count($active_menu) == 0}

                        <div class="dd-empty"></div>
                    
                    {else}

                    <ol class="dd-list">
                        {foreach $active_menu as $item}

                            <li class="dd-item dd3-item" data-id="{$item.id}">

                                <div class="dd-handle dd3-handle">Drag</div>
                                <div class="dd3-content">
                                    {if $item.target != '#'}
                                        <a href="{$item.target}" target="_blanc">{$item.title}</a>
                                    {else}
                                        {$item.title}
                                    {/if}
                                    <span class="delete-button"  style="float: right; margin-right:5px;"><a href="/admin/menu/del/{$item.id}" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a></span>
                                </div>
                                
                                {if isset($item.childs)}

                                    <ol class="dd-list">
                                
                                        {foreach $item.childs as $child}

                                            <li class="dd-item dd3-item" data-id="{$child.id}">
                                                <div class="dd-handle dd3-handle">Drag</div>
                                                <div class="dd3-content">
                                                    {if $child.target != '#'}
                                                        <a href="{$child.target}" target="_blanc">{$child.title}</a>
                                                    {else}
                                                        {$child.title}
                                                    {/if}
                                                    <a href="/admin/menu/del/{$child.id}" class="btn btn-danger btn-circle" style="float: right; margin-right:5px;"><i class="fa fa-trash-o"></i></a>
                                                </div>

                                                    {if isset($child.childs)}

                                                        <ol class="dd-list">
                                                    
                                                            {foreach $child.childs as $child2}

                                                                <li class="dd-item dd3-item" data-id="{$child2.id}">
                                                                    <div class="dd-handle dd3-handle">Drag</div>
                                                                    <div class="dd3-content">
                                                                        {if $child2.target != '#'}
                                                                            <a href="{$child2.target}" target="_blanc">{$child2.title}</a>
                                                                        {else}
                                                                            {$child2.title}
                                                                        {/if}
                                                                        <a href="/admin/menu/del/{$child2.id}" class="btn btn-danger btn-circle" style="float: right; margin-right:5px;"><i class="fa fa-trash-o"></i></a>
                                                                    </div>
                                                                </li>
                                                            
                                                            {/foreach}
                                                    
                                                        </ol>

                                                    {/if}

                                            </li>
                                        
                                        {/foreach}
                                
                                    </ol>

                                {/if}

                            </li>
                        {/foreach}
                    </ol>
                    {/if}
                </div>

            </div>
        </div>
    </div>
</div>

{*подключаем футер шаблона*}
{include file='footer.inc.tpl'}