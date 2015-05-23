<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 12:06:52
         compiled from "templates\admin\header.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289165526412cd55762-62222827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be4917685ef481056eb4df7c201e461515cd53fe' => 
    array (
      0 => 'templates\\admin\\header.inc.tpl',
      1 => 1428507069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289165526412cd55762-62222827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'site_settings' => 0,
    'css' => 0,
    'last_messages' => 0,
    'last_message' => 0,
    'user_id' => 0,
    'role' => 0,
    'menu' => 0,
    'first_level' => 0,
    'second_level' => 0,
    'menu_active' => 0,
    'error' => 0,
    'message' => 0,
    'header' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5526412ce7a721_74375964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526412ce7a721_74375964')) {function content_5526412ce7a721_74375964($_smarty_tpl) {?><!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <link rel="stylesheet" type="text/css" href="/dist/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/dist/metisMenu/dist/metisMenu.min.css">
    <?php if ($_smarty_tpl->tpl_vars['site_settings']->value['help_active']=='2') {?>
    <link rel="stylesheet" type="text/css" href="/dist/bootstrap-tour-master/bootstrap-tour.min.css">
    <?php }?>

    <link rel="stylesheet" type="text/css" href="/dist/css/sb-admin-2.css">
    <link rel="stylesheet" type="text/css" href="/dist/font-awesome/css/font-awesome.min.css">
    
    <?php echo $_smarty_tpl->tpl_vars['css']->value;?>


    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
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
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['site_settings']->value['admin_site_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['admin_title'];?>
</a>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-messages">

                    <?php  $_smarty_tpl->tpl_vars['last_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['last_message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['last_messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['last_message']->key => $_smarty_tpl->tpl_vars['last_message']->value) {
$_smarty_tpl->tpl_vars['last_message']->_loop = true;
?>
                        <li>
                            <a href="/admin/messages/read/<?php echo $_smarty_tpl->tpl_vars['last_message']->value['id'];?>
">
                                <div>
                                    <strong><?php echo $_smarty_tpl->tpl_vars['last_message']->value['name'];?>
</strong>
                                    <span class="pull-right text-muted">
                                        <em><?php echo $_smarty_tpl->tpl_vars['last_message']->value['datetime'];?>
</em>
                                    </span>
                                </div>
                                <div><?php echo $_smarty_tpl->tpl_vars['last_message']->value['text'];?>
<br><em><small><?php echo $_smarty_tpl->tpl_vars['last_message']->value['phone'];?>
</small></em></div>
                            </a>
                        </li>
                        <li class="divider"></li>
                    <?php } ?>

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
                    <li><a href="/admin/users/user/<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
"><i class="fa fa-user fa-fw"></i> Профиль</a></li>

                    <?php if ($_smarty_tpl->tpl_vars['role']->value=='admin') {?>
                        <li class="divider"></li>
                        <li><a href="/admin/users"><i class="fa fa-users fa-fw"></i> Пользователи</a></li>
                    <?php }?>
                    
                    <li class="divider"></li>
                    <li><a href="/admin/login/logout"><i class="fa fa-sign-out fa-fw"></i> Выйти</a></li>
                </ul>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    
                    <?php  $_smarty_tpl->tpl_vars['first_level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['first_level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['first_level']->key => $_smarty_tpl->tpl_vars['first_level']->value) {
$_smarty_tpl->tpl_vars['first_level']->_loop = true;
?>
                        
                        <?php if (isset($_smarty_tpl->tpl_vars['first_level']->value['group'])) {?>

                            <?php if ($_smarty_tpl->tpl_vars['first_level']->value['role']==$_smarty_tpl->tpl_vars['role']->value||$_smarty_tpl->tpl_vars['first_level']->value['role']=='user') {?>

                                <li>
                                    <a href="#"><i class="fa <?php echo $_smarty_tpl->tpl_vars['first_level']->value['icon'];?>
 fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['first_level']->value['group'];?>
<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                    
                                        <?php  $_smarty_tpl->tpl_vars['second_level'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['second_level']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['first_level']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['second_level']->key => $_smarty_tpl->tpl_vars['second_level']->value) {
$_smarty_tpl->tpl_vars['second_level']->_loop = true;
?>

                                            <?php if ($_smarty_tpl->tpl_vars['second_level']->value['role']==$_smarty_tpl->tpl_vars['role']->value||$_smarty_tpl->tpl_vars['second_level']->value['role']=='user') {?>
                                            
                                                <li <?php if ($_smarty_tpl->tpl_vars['menu_active']->value==$_smarty_tpl->tpl_vars['second_level']->value['menu_href']) {?> class="active" <?php }?>>

                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['second_level']->value['menu_href'];?>
"><i class="fa <?php echo $_smarty_tpl->tpl_vars['second_level']->value['icon'];?>
 fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['second_level']->value['menu_title'];?>
</a>
                                                
                                                </li>

                                            <?php }?>

                                        <?php } ?>
                                    
                                    </ul>
                                </li> 

                            <?php }?>

                        <?php } else { ?>

                            <?php if ($_smarty_tpl->tpl_vars['first_level']->value['role']==$_smarty_tpl->tpl_vars['role']->value||$_smarty_tpl->tpl_vars['first_level']->value['role']=='user') {?>

                                <li <?php if ($_smarty_tpl->tpl_vars['menu_active']->value==$_smarty_tpl->tpl_vars['first_level']->value['menu_href']) {?> class="active" <?php }?>>

                                    <a href="<?php echo $_smarty_tpl->tpl_vars['first_level']->value['menu_href'];?>
"><i class="fa <?php echo $_smarty_tpl->tpl_vars['first_level']->value['icon'];?>
 fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['first_level']->value['menu_title'];?>
</a>
                                
                                </li>

                            <?php }?>

                        <?php }?>

                    <?php } ?>

                 </ul>
            </div>
        </div>
    </nav>
    <!-- Конец меню -->


    <div id="page-wrapper">

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

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</h1>
            </div>
        </div>

        <div class="row">
<!--конец хедера--><?php }} ?>
