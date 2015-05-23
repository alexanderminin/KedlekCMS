<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-18 19:58:15
         compiled from "templates\front\default\home.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:110305557356c696909-14054147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd86428759e0d0a3776eb6af00a621d2452dfb5a' => 
    array (
      0 => 'templates\\front\\default\\home.page.tpl',
      1 => 1431967380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110305557356c696909-14054147',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5557356c6dce18_00495625',
  'variables' => 
  array (
    'home_html' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5557356c6dce18_00495625')) {function content_5557356c6dce18_00495625($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section class="col-lg-12 col-md-12 col-xs-12">
  
    <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['home_html']->value;?>
</div>
  
</section>

<section class="col-lg-12 col-md-12 col-xs-12">
  <div class="panel panel-default">
      <div class="panel-body"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</div>
  </div>
</section>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
