<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-15 13:02:49
         compiled from "templates\front\home.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2051555267419a27a40-85551125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5845027d859ce3dac96c4cbffc0c444872565f62' => 
    array (
      0 => 'templates\\front\\home.page.tpl',
      1 => 1431683186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2051555267419a27a40-85551125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55267419bd1724_34908980',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55267419bd1724_34908980')) {function content_55267419bd1724_34908980($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<section class="col-lg-12 col-md-12 col-xs-12">

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

</section>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
