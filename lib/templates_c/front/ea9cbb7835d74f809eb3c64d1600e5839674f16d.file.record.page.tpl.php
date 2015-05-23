<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-17 11:47:40
         compiled from "templates\front\default\record.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6577555855acec0839-56845629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea9cbb7835d74f809eb3c64d1600e5839674f16d' => 
    array (
      0 => 'templates\\front\\default\\record.page.tpl',
      1 => 1431684090,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6577555855acec0839-56845629',
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_555855acf222d9_67851793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555855acf222d9_67851793')) {function content_555855acf222d9_67851793($_smarty_tpl) {?>
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
