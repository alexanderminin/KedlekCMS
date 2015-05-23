<?php /*%%SmartyHeaderCode:4967554618fb3b9ae7-01958012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '679408601d19ed794450eba5ef85c81d5457b585' => 
    array (
      0 => 'templates\\front\\record.page.tpl',
      1 => 1428817847,
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
  'nocache_hash' => '4967554618fb3b9ae7-01958012',
  'variables' => 
  array (
    'parent_url' => 0,
    'parent_title' => 0,
    'title' => 0,
    'text' => 0,
    'datetime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554618fb452087_68733694',
  'cache_lifetime' => 20,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554618fb452087_68733694')) {function content_554618fb452087_68733694($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="описание,т,стовой,записи" />
    <meta name="description" content="краткое описание тестовой записи">
    <meta name="author" content="Boldrich.ru">
    <link rel="shortcut icon" href="/images/favicon.ico">

    <title>Первая тестовая запись - Питомник Болдрич Виктори</title>

    <link rel="stylesheet" type="text/css" href="/dist/bootstrap/dist/css/bootstrap.min.css">
    <link href="/dist/smartmenus/jquery.smartmenus.bootstrap.css" rel="stylesheet">

    <!-- Временный стиль-->
    <link rel="stylesheet" type="text/css" href="/dist/config/style.css">
    <!-- Конец Временный стиль-->

    <link rel="stylesheet" type="text/css" href="/dist/sweetalert2/sweetalert2.css">
    
    

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
                                
                                
                                    
                                        <li >
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
            <h1>Первая запись</h1>
        </div>
    </div>
    <div class="clearfix"></div>



    

    <div class="row">
    <!--конец хедера-->

<div class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li><a href="/category/kategorija">Категория</a></li>
        <li class="active">Первая запись</li>
    </ol>
</div>

<div class="col-lg-12 col-md-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">Первая запись</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                   
                  <div style="text-align: center;"><strong>Compellingly conceptualize quality processes after interactive e-markets. Phosfluorescently productize user-centric deliverables before client-centric methods of empowerment. Objectively transition cooperative materials vis-a-vis equity invested imperatives. Quickly synthesize resource sucking models with resource maximizing results. Objectively plagiarize strategic channels vis-a-vis interactive leadership.</strong></div>
<div></div>
<div>Energistically empower real-time scenarios vis-a-vis ethical meta-services. Progressively enable progressive products through orthogonal content. Rapidiously architect scalable supply chains for flexible best practices. Completely predominate client-centric communities via synergistic niche markets. Synergistically develop clicks-and-mortar vortals before go forward ROI.</div>
<div></div>
<div>Phosfluorescently architect enterprise customer service before out-of-the-box e-markets. Enthusiastically visualize interactive services rather than economically sound niche markets. Objectively innovate alternative customer service before B2C potentialities. Monotonectally benchmark unique platforms before team building leadership. Efficiently empower user-centric strategic theme areas and team building information.</div>
<div></div>
<div>Competently implement resource sucking testing procedures without market-driven action items. Conveniently network diverse vortals and plug-and-play platforms. Appropriately facilitate parallel channels without sticky resources. Authoritatively matrix end-to-end e-markets without technically sound infrastructures. Progressively whiteboard optimal manufactured products for standardized processes.</div>
<div></div>
<div>Seamlessly administrate principle-centered manufactured products after future-proof supply chains. Quickly redefine orthogonal processes via alternative niche markets. Compellingly scale clicks-and-mortar testing procedures for open-source deliverables. Completely disintermediate low-risk high-yield leadership after cost effective platforms. Holisticly synthesize premium.</div>
         
                </div>
            </div>
        </div>
        <div class="panel-footer">2015-04-22 20:13:06</div>
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
