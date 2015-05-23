<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 08:52:49
         compiled from "templates\front\404.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6216552641236d7333-15863177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b438c40471164ffd3b1735d936e4860281b0d04d' => 
    array (
      0 => 'templates\\front\\404.page.tpl',
      1 => 1428817913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6216552641236d7333-15863177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55264123740ad4_21486890',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55264123740ad4_21486890')) {function content_55264123740ad4_21486890($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li class="active">404</li>
    </ol>
</div>

<h1>404</h1>

<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
