<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-15 13:03:00
         compiled from "templates\front\record.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201765529ffc71d2a93-59783821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '679408601d19ed794450eba5ef85c81d5457b585' => 
    array (
      0 => 'templates\\front\\record.page.tpl',
      1 => 1431684090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201765529ffc71d2a93-59783821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5529ffc7243f33_93903913',
  'variables' => 
  array (
    'parent_url' => 0,
    'parent_title' => 0,
    'title' => 0,
    'text' => 0,
    'datetime' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5529ffc7243f33_93903913')) {function content_5529ffc7243f33_93903913($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<aside class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li><a href="/<?php echo $_smarty_tpl->tpl_vars['parent_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['parent_title']->value;?>
</a></li>
        <li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
    </ol>
</aside>

<section class="col-lg-12 col-md-12 col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>
            </div>
        </div>
        <div class="panel-footer"><?php echo $_smarty_tpl->tpl_vars['datetime']->value;?>
</div>
    </div>
</section>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
