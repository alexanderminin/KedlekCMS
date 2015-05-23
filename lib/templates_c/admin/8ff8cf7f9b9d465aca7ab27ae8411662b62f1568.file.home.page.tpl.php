<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 09:58:06
         compiled from "templates\admin\home.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16527552622fe17e6c9-03526588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ff8cf7f9b9d465aca7ab27ae8411662b62f1568' => 
    array (
      0 => 'templates\\admin\\home.page.tpl',
      1 => 1428487748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16527552622fe17e6c9-03526588',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552622fe1f39d8_43658317',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552622fe1f39d8_43658317')) {function content_552622fe1f39d8_43658317($_smarty_tpl) {?>
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
