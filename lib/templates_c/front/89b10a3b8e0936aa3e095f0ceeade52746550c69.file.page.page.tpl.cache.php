<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-03 15:46:10
         compiled from "templates\front\page.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2701955461892851816-47216170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '2701955461892851816-47216170',
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
  'unifunc' => 'content_554618928bee34_14157040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554618928bee34_14157040')) {function content_554618928bee34_14157040($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


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



<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
