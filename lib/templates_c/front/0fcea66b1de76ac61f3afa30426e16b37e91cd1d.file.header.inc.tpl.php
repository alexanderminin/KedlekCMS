<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 10:29:24
         compiled from "templates\front\header.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2881155262a54082203-57342137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fcea66b1de76ac61f3afa30426e16b37e91cd1d' => 
    array (
      0 => 'templates\\front\\header.inc.tpl',
      1 => 1428564531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2881155262a54082203-57342137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'seo_keywords' => 0,
    'seo_descr' => 0,
    'seo_title' => 0,
    'site_css' => 0,
    'site_settings' => 0,
    'menu' => 0,
    'first_level' => 0,
    'menu_active' => 0,
    'last_level' => 0,
    'title' => 0,
    'error' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55262a5414d434_19151025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55262a5414d434_19151025')) {function content_55262a5414d434_19151025($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['seo_keywords']->value;?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['seo_descr']->value;?>
">
    <meta name="author" content="Boldrich.ru">


    <title><?php echo $_smarty_tpl->tpl_vars['seo_title']->value;?>
</title>

    <link rel="stylesheet" type="text/css" href="/dist/bootstrap/dist/css/bootstrap.min.css">

    <!-- Временный стиль-->
    <link rel="stylesheet" type="text/css" href="/dist/config/style.css">
    <!-- Конец Временный стиль-->

    <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.css" />
    <link rel="stylesheet" type="text/css" href="/dist/pickadate/themes/default.date.css" />
    
    <?php echo $_smarty_tpl->tpl_vars['site_css']->value;?>


    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <!-- Счетчики метрики-->

        <!-- Google Analytics-->
            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['google_analytics'];?>

        <!-- END of Google Analytics-->

        <!-- Yandex metrika-->
            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['yandex_metrika'];?>

        <!-- END of Yandex metrika-->

        <!-- Other metrik-->
            <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['other_metrika'];?>

        <!-- END of Other metrik-->

    <!-- Конец Счетчики метрики-->

    <!-- Код соц. кнопок -->
    <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['fb_header'];?>

    <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['vk_header'];?>

    <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['gplus_header'];?>

    <!-- Конец Код соц. кнопок-->

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['admin_title'];?>
</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">

            <?php  $_smarty_tpl->tpl_vars['first_level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['first_level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['first_level']->key => $_smarty_tpl->tpl_vars['first_level']->value) {
$_smarty_tpl->tpl_vars['first_level']->_loop = true;
?>

                <?php if (isset($_smarty_tpl->tpl_vars['first_level']->value['childs'])) {?>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['first_level']->value['title'];?>
 <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">

                            <li <?php if ($_smarty_tpl->tpl_vars['menu_active']->value==$_smarty_tpl->tpl_vars['first_level']->value['target']) {?> class="active" <?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['first_level']->value['target'];?>
" ><?php echo $_smarty_tpl->tpl_vars['first_level']->value['title'];?>
</a>
                            </li>

                            <?php  $_smarty_tpl->tpl_vars['last_level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['last_level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['first_level']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['last_level']->key => $_smarty_tpl->tpl_vars['last_level']->value) {
$_smarty_tpl->tpl_vars['last_level']->_loop = true;
?>

                                <li <?php if ($_smarty_tpl->tpl_vars['menu_active']->value==$_smarty_tpl->tpl_vars['last_level']->value['target']) {?> class="active" <?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['last_level']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['last_level']->value['title'];?>
</a>
                                </li>

                            <?php } ?>

                        </ul>
                    </li>

                <?php } else { ?>

                    <li <?php if ($_smarty_tpl->tpl_vars['menu_active']->value==$_smarty_tpl->tpl_vars['first_level']->value['target']) {?> class="active" <?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['first_level']->value['target'];?>
"><?php echo $_smarty_tpl->tpl_vars['first_level']->value['title'];?>
</a>
                    </li>
                
                <?php }?>
                
            <?php } ?>

            </ul>
        </div>
    </div>
</nav>

    <div class="container">


        <div class="jumbotron">
            <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)||isset($_smarty_tpl->tpl_vars['message']->value)) {?>
            <div class="row"> 

                <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?> 
                    <div class ='col-md-12'>
                        <div class='alert alert-danger'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                        </div>
                    </div>
                <?php }?>

                <?php if (isset($_smarty_tpl->tpl_vars['message']->value)) {?>
                    <div class ='col-md-12'>
                        <div class='alert alert-success'>
                            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                        </div>
                    </div>
                <?php }?>
                
            </div>
            <div class="clearfix"></div>
        <?php }?>


        <div class="row marketing">
        <!--конец хедера--><?php }} ?>
