<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 09:25:05
         compiled from "templates\front\default\page.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106935558344158f932-94571820%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '061a43e4ff9b0b0775091034252e7ddf15a12c5a' => 
    array (
      0 => 'templates\\front\\default\\page.page.tpl',
      1 => 1431684052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106935558344158f932-94571820',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555834415e19c2_46873748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555834415e19c2_46873748')) {function content_555834415e19c2_46873748($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<aside class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
    </ol>
</aside>

<section class="col-lg-12 col-md-12 col-xs-12">
  <div class="panel panel-default">
      <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>
  </div>
</section>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
