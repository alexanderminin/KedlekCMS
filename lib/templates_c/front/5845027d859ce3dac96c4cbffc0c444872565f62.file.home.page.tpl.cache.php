<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-03 15:45:52
         compiled from "templates\front\home.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129245546188082e3b3-80682388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5845027d859ce3dac96c4cbffc0c444872565f62' => 
    array (
      0 => 'templates\\front\\home.page.tpl',
      1 => 1428985106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129245546188082e3b3-80682388',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5546188088bfd5_90996117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5546188088bfd5_90996117')) {function content_5546188088bfd5_90996117($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="col-lg-12 col-md-12 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            Обратная связь
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12">
                   <input id="order_number" type="hidden" name="text" value="#345">

                  <div class="well center-block">
                    <button id="callback" class="btn btn-danger btn-lg btn-block">Обратный звонок</button>
                    <button id="question" class="btn btn-success btn-lg btn-block">Задать вопрос</button>
                    <button id="order" class="btn btn-info btn-lg btn-block">Стать хозяином</button>
                  </div>
         
                </div>
            </div>
        </div>
    </div>

</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
