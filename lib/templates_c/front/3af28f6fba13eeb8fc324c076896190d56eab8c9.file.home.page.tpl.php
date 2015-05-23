<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 10:29:23
         compiled from "templates\front\home.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:981855262a53f24359-40689479%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af28f6fba13eeb8fc324c076896190d56eab8c9' => 
    array (
      0 => 'templates\\front\\home.page.tpl',
      1 => 1428386841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '981855262a53f24359-40689479',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'site_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55262a5406e978_39400644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55262a5406e978_39400644')) {function content_55262a5406e978_39400644($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="panel panel-default">
    <div class="panel-heading">
        Обратная связь
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
               
              <div class="well center-block">
                <button data-toggle="modal" class="btn btn-warning btn-lg btn-block" data-target="#myModal1">Обратный звонок</button>
                <button data-toggle="modal" class="btn btn-success btn-lg btn-block" data-target="#myModal2">Задать вопрос</button>
                <button data-toggle="modal" class="btn btn-info btn-lg btn-block" data-target="#myModal3">Совершить заказ</button>
              </div>
     
            </div>
        </div>
    </div>
</div>

<div class="modal fade myModal" id="myModal1">
    <div class="modal-dialog">

        <div class="modal-content">
            
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Заказать обратный звонок</h4>
                </div>
                <form role="form" action="/messages/callback" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Имя</label>
                        <input type="text" class="form-control" name="name" autocomplete="off">
                    </div>

                    <input type="hidden" name="type" value="1">

                    <div class="form-group">
                        <label>Время звонка</label>
                        <input type="text" class="form-control" name="text" autocomplete="off">
                    </div>

                    <div class="form-group">
                        <label>Телефон</label>
                        <input type="text" class="form-control" name="phone" autocomplete="off">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-success">Отправить</button>
                </div>
                </form>
            
        </div>
        
    </div>
</div>


<div class="modal fade myModal" id="myModal2">
    <div class="modal-dialog">

        <div class="modal-content">
            
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Задать вопрос</h4>
                </div>
                <form role="form" action="/messages/question" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Имя</label>
                        <input type="text" class="form-control" name="name" autocomplete="off">
                    </div>

                    <input type="hidden" name="type" value="2">

                    <div class="form-group">
                        <label>Сообщение</label>
                        <textarea class="form-control" rows="3" name="text"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Телефон</label>
                        <input type="text" class="form-control" name="phone" autocomplete="off">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-success">Отправить</button>
                </div>
                </form>
            
        </div>
        
    </div>
</div>


<div class="modal fade myModal" id="myModal3">
    <div class="modal-dialog">

        <div class="modal-content">
            
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Совершить заказ</h4>
                </div>
                <form role="form" action="/messages/order" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label>Имя</label>
                        <input type="text" class="form-control" name="name" autocomplete="off">
                    </div>

                    <input type="hidden" name="type" value="1">

                    <div class="form-group">
                        <label>Номер заказа</label>
                        <input type="text" class="form-control" name="text" autocomplete="off" value="#3457">
                    </div>

                    <div class="form-group">
                        <label>Телефон</label>
                        <input type="text" class="form-control" name="phone" autocomplete="off">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-success">Заказать</button>
                </div>
                </form>
            
        </div>
        
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading">
        Контакты
    </div>
    <div class="panel-body">
        <div class="row">

            <div class="col-lg-12">
                <b>Телефон:</b> <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['contact_phone'];?>

            </div>
            <div class="col-lg-12">
                <b>E-mail:</b> <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['contact_adr'];?>

            </div>
            <div class="col-lg-12">
                <b>Адрес:</b> <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['contact_mail'];?>

            </div>

        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        Карта
    </div>
    <div class="panel-body">
        <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['contact_map'];?>

    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
