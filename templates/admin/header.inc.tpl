<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{$title}</title>

    <link rel="stylesheet" type="text/css" href="/dist/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/dist/metisMenu/dist/metisMenu.min.css">
    {if $site_settings.help_active == '2'}
    <link rel="stylesheet" type="text/css" href="/dist/bootstrap-tour-master/bootstrap-tour.min.css">
    {/if}

    <link rel="stylesheet" type="text/css" href="/dist/css/sb-admin-2.css">
    <link rel="stylesheet" type="text/css" href="/dist/font-awesome/css/font-awesome.min.css">
    
    {$css}

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Меню</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{$site_settings.admin_site_url}">{$site_settings.admin_title}</a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">

                    {foreach $last_messages as $last_message}
                        <li>
                            <a href="/admin/messages/read/{$last_message.id}">
                                <div>
                                    <strong>{$last_message.name}</strong>
                                    <span class="pull-right text-muted">
                                        <em>{$last_message.datetime}</em>
                                    </span>
                                </div>
                                <div>{$last_message.text}<br><em><small>{$last_message.phone}</small></em></div>
                            </a>
                        </li>
                        <li class="divider"></li>
                    {/foreach}

                    <li>
                        <a class="text-center" href="/admin/messages">
                            <strong>Все сообщения...</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="/admin/users/user/{$user_id}"><i class="fa fa-user fa-fw"></i> Профиль</a></li>

                    {if $role == 'admin'}
                        <li class="divider"></li>
                        <li><a href="/admin/users"><i class="fa fa-users fa-fw"></i> Пользователи</a></li>
                    {/if}
                    
                    <li class="divider"></li>
                    <li><a href="/admin/login/logout"><i class="fa fa-sign-out fa-fw"></i> Выйти</a></li>
                </ul>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    
                    {foreach $menu as $first_level}
                        
                        {if isset($first_level.group)}

                            {if $first_level.role == $role ||  $first_level.role == 'user' }

                                <li>
                                    <a href="#"><i class="fa {$first_level.icon} fa-fw"></i> {$first_level.group}<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                    
                                        {foreach $first_level.childs as $second_level}

                                            {if $second_level.role == $role ||  $second_level.role == 'user'}
                                            
                                                <li {if $menu_active == $second_level.menu_href} class="active" {/if}>

                                                    <a href="{$second_level.menu_href}"><i class="fa {$second_level.icon} fa-fw"></i> {$second_level.menu_title}</a>
                                                
                                                </li>

                                            {/if}

                                        {/foreach}
                                    
                                    </ul>
                                </li> 

                            {/if}

                        {else}

                            {if $first_level.role == $role ||  $first_level.role == 'user'}

                                <li {if $menu_active == $first_level.menu_href} class="active" {/if}>

                                    <a href="{$first_level.menu_href}"><i class="fa {$first_level.icon} fa-fw"></i> {$first_level.menu_title}</a>
                                
                                </li>

                            {/if}

                        {/if}

                    {/foreach}

                 </ul>
            </div>
        </div>
    </nav>
    <!-- Конец меню -->


    <div id="page-wrapper">

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

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{$header}</h1>
            </div>
        </div>

        <div class="row">
<!--конец хедера-->