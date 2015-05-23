<?php /*%%SmartyHeaderCode:32385554618c0006d96-05923144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4c2b69632bcdb847208425c0b476586e42f2ba1' => 
    array (
      0 => 'templates\\front\\gallerylist.page.tpl',
      1 => 1429708841,
      2 => 'file',
    ),
    '29ced2236189b3b89065c5e2f4efcd73a88726bb' => 
    array (
      0 => 'templates\\front\\header.inc.tpl',
      1 => 1428937212,
      2 => 'file',
    ),
    'bc9963e9bb9eeec3beca8f7830e6ad84b0a41cd8' => 
    array (
      0 => 'templates\\front\\footer.inc.tpl',
      1 => 1428983033,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32385554618c0006d96-05923144',
  'variables' => 
  array (
    'title' => 0,
    'items' => 0,
    'item' => 0,
    'Page' => 0,
    'Prev_Page' => 0,
    'menu_active' => 0,
    'pag_urls' => 0,
    'pag_url' => 0,
    'Next_Page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554618c01472e3_44604315',
  'cache_lifetime' => 20,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554618c01472e3_44604315')) {function content_554618c01472e3_44604315($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="фото и видео,фото,видео" />
    <meta name="description" content="Смешанный альбом">
    <meta name="author" content="Boldrich.ru">
    <link rel="shortcut icon" href="/images/favicon.ico">

    <title>Фото и видео - Питомник Болдрич Виктори</title>

    <link rel="stylesheet" type="text/css" href="/dist/bootstrap/dist/css/bootstrap.min.css">
    <link href="/dist/smartmenus/jquery.smartmenus.bootstrap.css" rel="stylesheet">

    <!-- Временный стиль-->
    <link rel="stylesheet" type="text/css" href="/dist/config/style.css">
    <!-- Конец Временный стиль-->

    <link rel="stylesheet" type="text/css" href="/dist/sweetalert2/sweetalert2.css">
    
    
                <link rel="stylesheet" type="text/css" href="/dist/config/css/gallery.css" />
            

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Счетчики метрики-->

        <!-- Google Analytics-->
            
        <!-- END of Google Analytics-->

        <!-- Yandex metrika-->
            
        <!-- END of Yandex metrika-->

        <!-- Other metrik-->
            
        <!-- END of Other metrik-->

    <!-- Конец Счетчики метрики-->

    <!-- Код соц. кнопок -->
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

<script type="text/javascript">
  VK.init({apiId: 4859120, onlyWidgets: true});
</script>
    <script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'ru'}
</script>
    <!-- Конец Код соц. кнопок-->

</head>

<body>
<div class="container">

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Boldrich.ru</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">

                
                    
                        <li >
                            <a href="/home">Главная</a>
                        </li>
                    
                                        
                
                    
                        <li>
                            <a href="#">Страницы</a>
                            <ul class="dropdown-menu">
                                
                                
                                    
                                        <li >
                                            <a href="/pages/stranica">Первая</a>
                                        </li>

                                    
                                
                                    
                                        <li >
                                            <a href="/pages/vtoraja_stranica">Вторая</a>
                                        </li>

                                    
                                
                                    
                                        <li>
                                            <a href="#">Подменю</a>
                                            <ul class="dropdown-menu">
                                                
                                                
                                                    <li >
                                                        <a href="/pages/tretja_stranica">Третья</a>
                                                    </li>

                                                
                                                
                                            </ul>
                                        </li>

                                    
                                
                                
                            </ul>
                        </li>

                                        
                
                    
                        <li >
                            <a href="/category/kategorija">Категория</a>
                        </li>
                    
                                        
                
                    
                        <li>
                            <a href="#">Галерея</a>
                            <ul class="dropdown-menu">
                                
                                
                                    
                                        <li  class="active" >
                                            <a href="/gallery/foto_i_video">Фото и видео</a>
                                        </li>

                                    
                                
                                    
                                        <li >
                                            <a href="/gallery/foto">Фото</a>
                                        </li>

                                    
                                
                                    
                                        <li >
                                            <a href="/gallery/video">Видео</a>
                                        </li>

                                    
                                
                                
                            </ul>
                        </li>

                                        
                
                    
                        <li >
                            <a href="/contact">Контакты</a>
                        </li>
                    
                                        
                
                    
                        <li >
                            <a href="http://ya.ru">Яндекс</a>
                        </li>
                    
                                        
                
                </ul>
            </div>
        </div>
    </nav>

    <div class ='col-md-2'>
        <img src="/images/logo.png" alt="Питомник Болдрич Виктори">
    </div>
    <div class ='col-md-10'>
        <div class="jumbotron">
            <h1>Фото и видео</h1>
        </div>
    </div>
    <div class="clearfix"></div>



    

    <div class="row">
    <!--конец хедера-->

<div class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li class="active">Фото и видео</li>
    </ol>
</div>

<div class="col-lg-12 col-md-12 col-xs-12">

    
            
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="embed-responsive embed-responsive-4by3">
                            <a href="/view/betmen" class="img-thumbnail thumb-div" >
                                <img class="img-responsive thumb-img" src="/images/thumb/artleo.com-10501.jpg"  alt="Бэтмен">
                            </a>
                        </div>
                        <div class="caption">
                            <a href="/view/betmen"><h3>Бэтмен</h3></a>
                            <p><span class="label label-default">2015-04-01</span></p>
                            <p>Супергерой Бэтмен</p>
                        </div>
                    </div>
                </div>

            
        
                            
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/9GQlCoJYk7Q?hd=1&rel=0" allowfullscreen></iframe>
                        </div>
                        <div class="caption">
                        <h3>Духless 2.</h3>
                        <p><span class="label label-default">2015-04-11</span></p>
                        <p>Духless 2. Трейлер '2015'. HD</p>
                        </div>
                    </div>
                </div>

            
        
                            
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/5mj4_iTRVzw?hd=1&rel=0" allowfullscreen></iframe>
                        </div>
                        <div class="caption">
                        <h3>Земля будущего.</h3>
                        <p><span class="label label-default">2015-04-07</span></p>
                        <p>Земля будущего. Русский трейлер '2015'. HD</p>
                        </div>
                    </div>
                </div>

            
        
</div>



        <!-- Конец контента -->
        </div>

        <footer class="footer">
            <div class="row">
                
                <div class="col-md-12">


                    <!-- facebook -->
                        <div class="col-md-3 share">
                        <div class="fb-like" data-href="http://boldrich.ru" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
                        </div>
                    <!-- end of facebook -->

                    <!-- Vkontakte -->
                        <div class="col-md-3 share">
                            <div id="vk_like"></div>
<script type="text/javascript">
VK.Widgets.Like("vk_like", {type: "button"});
</script>
                        </div>
                    <!-- end of Vkontakte -->

                    <!-- Twitter -->
                        <div class="col-md-2 share">
                            <a class="twitter-share-button"
  href="https://twitter.com/share">
Tweet
</a>
<script>
window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return t;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>
                        </div>
                    <!-- end of Twitter -->

                    <!-- Google plus -->
                        <div class="col-md-2 share">
                            <div class="g-plus" data-action="share" data-annotation="bubble"></div>
                        </div>
                    <!-- end of Google plus -->

                    <!-- Yandex share -->
                        <div class="col-md-2 share">
                            <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="odnoklassniki,moimir" data-yashareTheme="counter"></div>
                        </div>
                    <!-- end of Yandex share -->


                </div>

            </div>
        </footer>

    </div>

    <script type="text/javascript" src="/dist/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/dist/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/dist/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="/dist/config/sweetalert/callback.js"></script>
    <script type="text/javascript" src="/dist/smartmenus/jquery.smartmenus.min.js"></script>
    <script type="text/javascript" src="/dist/smartmenus/jquery.smartmenus.bootstrap.min.js"></script>


    

            

</body>

</html><?php }} ?>
