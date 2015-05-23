<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="{$seo_keywords}" />
    <meta name="description" content="{$seo_descr}">
    <meta name="author" content="Boldrich.ru">
    <link rel="shortcut icon" href="/images/{$site_settings.site_favicon}">

    <title>{$seo_title} - {$site_settings.site_title}</title>

    <link rel="stylesheet" type="text/css" href="/dist/bootstrap/dist/css/bootstrap.min.css">
    <link href="/dist/smartmenus/jquery.smartmenus.bootstrap.css" rel="stylesheet">

    <!-- Временный стиль-->
    <link rel="stylesheet" type="text/css" href="/dist/config/style.css">
    <!-- Конец Временный стиль-->

    <link rel="stylesheet" type="text/css" href="/dist/sweetalert2/sweetalert2.css">
	<link rel="stylesheet" type="text/css" href="/dist/config/css/gallery.css" />
	
	<link rel="stylesheet" type="text/css" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
	<link rel="stylesheet" type="text/css" href="/dist/bootstrap-image-gallery/css/bootstrap-image-gallery.min.css">
	<link rel="stylesheet" type="text/css" href="/dist/config/css/gallery_upd.css" />
	
	<link rel="stylesheet" href="/dist/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Счетчики метрики-->

        <!-- Google Analytics-->
            {$site_settings.google_analytics}
        <!-- END of Google Analytics-->

        <!-- Yandex metrika-->
            {$site_settings.yandex_metrika}
        <!-- END of Yandex metrika-->

        <!-- Other metrik-->
            {$site_settings.other_metrika}
        <!-- END of Other metrik-->

    <!-- Конец Счетчики метрики-->

    <!-- Код соц. кнопок -->
    {$site_settings.fb_header}
    {$site_settings.vk_header}
    {$site_settings.gplus_header}
    <!-- Конец Код соц. кнопок-->

</head>

<body>
<div class="container">
    <header>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Меню</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img alt="{$site_settings.site_title}" src="/images/{$site_settings.site_logo}"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">

                    {foreach $menu as $first_level}

                        {if isset($first_level.childs)}

                            <li>
                                <a href="{$first_level.target}">{$first_level.title}</a>
                                <ul class="dropdown-menu">
                                    
                                    {foreach $first_level.childs as $last_level}

                                        {if isset($last_level.childs)}

                                            <li>
                                                <a href="{$last_level.target}">{$last_level.title}</a>
                                                <ul class="dropdown-menu">
                                                    
                                                    {foreach $last_level.childs as $final_level}

                                                        <li {if $menu_active == $final_level.target} class="active" {/if}>
                                                            <a href="{$final_level.target}">{$final_level.title}</a>
                                                        </li>

                                                    {/foreach}

                                                    
                                                </ul>
                                            </li>

                                        {else}

                                            <li {if $menu_active == $last_level.target} class="active" {/if}>
                                                <a href="{$last_level.target}">{$last_level.title}</a>
                                            </li>

                                        {/if}

                                    {/foreach}

                                    
                                </ul>
                            </li>

                        {else}

                            <li {if $menu_active == $first_level.target} class="active" {/if}>
                                <a href="{$first_level.target}">{$first_level.title}</a>
                            </li>
                        
                        {/if}
                        
                    {/foreach}

                    </ul>

                    <div class="navbar-form navbar-right" style="margin-right: 0px;">
                        <button id="question" class="btn btn-success">Есть вопросы ?</button>
                        <button id="callback" class="btn btn-danger">Обратный звонок</button>
                    </div>
                   
                </div>
            </div>
        </nav>

        <div class="jumbotron">
            <h1>{$title}</h1>
        </div>

        <div class="clearfix"></div>

        {if isset($error) || isset($message)}
            <div class="row"> 

                {if isset($error)} 
                    <div class ='col-md-12'>
                        <div class='alert alert-danger'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            {$error}
                        </div>
                    </div>
                {/if}

                {if isset($message)}
                    <div class ='col-md-12'>
                        <div class='alert alert-success'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            {$message}
                        </div>
                    </div>
                {/if}
                
            </div>
            <div class="clearfix"></div>
        {/if}

    </header>

    <div class="row">
    <!--конец хедера-->