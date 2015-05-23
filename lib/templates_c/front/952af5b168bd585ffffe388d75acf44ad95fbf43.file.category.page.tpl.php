<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 10:29:38
         compiled from "templates\front\category.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2593855262a6256b3b7-68425673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '952af5b168bd585ffffe388d75acf44ad95fbf43' => 
    array (
      0 => 'templates\\front\\category.page.tpl',
      1 => 1428423782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2593855262a6256b3b7-68425673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'records' => 0,
    'record' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55262a625fbc58_01555893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55262a625fbc58_01555893')) {function content_55262a625fbc58_01555893($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php  $_smarty_tpl->tpl_vars['record'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['record']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['records']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['record']->key => $_smarty_tpl->tpl_vars['record']->value) {
$_smarty_tpl->tpl_vars['record']->_loop = true;
?>
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['record']->value['title'];?>
</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                   
                  <?php echo $_smarty_tpl->tpl_vars['record']->value['descr'];?>

         
                </div>
            </div>
        </div>
        <div class="panel-footer"><?php echo $_smarty_tpl->tpl_vars['record']->value['datetime'];?>
 <a href="/record/<?php echo $_smarty_tpl->tpl_vars['record']->value['url'];?>
">Подробнее</a></div>
    </div>
</div>
<?php } ?>



<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
