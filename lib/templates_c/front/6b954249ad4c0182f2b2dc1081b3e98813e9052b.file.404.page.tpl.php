<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 09:46:16
         compiled from "templates\front\default\404.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32538555839384c7295-50941963%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b954249ad4c0182f2b2dc1081b3e98813e9052b' => 
    array (
      0 => 'templates\\front\\default\\404.page.tpl',
      1 => 1431683321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32538555839384c7295-50941963',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5558393850d7a7_40688533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5558393850d7a7_40688533')) {function content_5558393850d7a7_40688533($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<aside class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li class="active">404</li>
    </ol>
</aside>

<section>
    <h1>404</h1>
    <p>Запрашиваемая страница не найдена</p>
</section>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
