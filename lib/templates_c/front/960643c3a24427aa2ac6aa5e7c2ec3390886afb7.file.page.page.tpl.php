<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 10:29:29
         compiled from "templates\front\page.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9255262a59620d34-62811598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '960643c3a24427aa2ac6aa5e7c2ec3390886afb7' => 
    array (
      0 => 'templates\\front\\page.page.tpl',
      1 => 1428406704,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9255262a59620d34-62811598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55262a59699ec8_36772248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55262a59699ec8_36772248')) {function content_55262a59699ec8_36772248($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="panel panel-default">
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
               
              <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

     
            </div>
        </div>
    </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
