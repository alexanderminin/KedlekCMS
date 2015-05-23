<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 10:31:40
         compiled from "templates\front\record.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6955262adc3406d3-93013706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c33737e52b9979c286234ed961bd8700f292e67' => 
    array (
      0 => 'templates\\front\\record.page.tpl',
      1 => 1428420332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6955262adc3406d3-93013706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'text' => 0,
    'datetime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55262adc3c9272_20201841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55262adc3c9272_20201841')) {function content_55262adc3c9272_20201841($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                   
                  <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

         
                </div>
            </div>
        </div>
        <div class="panel-footer"><?php echo $_smarty_tpl->tpl_vars['datetime']->value;?>
</div>
    </div>
</div>



<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
