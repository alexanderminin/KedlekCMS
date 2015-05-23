<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 16:48:50
         compiled from "templates\admin\home.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5790552531c24ab306-46652139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c4a8cba4783e709e9ce2db3b2e7cbdfb3c8a6bf' => 
    array (
      0 => 'templates\\admin\\home.page.tpl',
      1 => 1428487748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5790552531c24ab306-46652139',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552531c2537d29_71123298',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552531c2537d29_71123298')) {function content_552531c2537d29_71123298($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="panel panel-default">
    <div class="panel-heading">
        Basic Form Elements
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
               
                <div class="form-group">
                    <label>Text area</label>
                    <textarea class="form-control moxiecut" rows="3"></textarea>
                </div>
                    
            </div>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
