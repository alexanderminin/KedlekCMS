<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 08:52:49
         compiled from "templates\front\page.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217595529fcc08595a3-95107301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b10a3b8e0936aa3e095f0ceeade52746550c69' => 
    array (
      0 => 'templates\\front\\page.page.tpl',
      1 => 1428817965,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217595529fcc08595a3-95107301',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5529fcc08c2d38_52015834',
  'variables' => 
  array (
    'title' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5529fcc08c2d38_52015834')) {function content_5529fcc08c2d38_52015834($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
    </ol>
</div>

<div class="col-lg-12 col-md-12 col-xs-12">
  <div class="panel panel-default">
      <div class="panel-body">
   
        <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

       
      </div>
  </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
