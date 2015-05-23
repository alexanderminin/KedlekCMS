<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-15 13:06:07
         compiled from "templates\front\contacts.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1294655267f9061fd52-89074655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cad661cf91c5c48c65ad2fa97707b2389ba5869' => 
    array (
      0 => 'templates\\front\\contacts.page.tpl',
      1 => 1431684359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1294655267f9061fd52-89074655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55267f906c3e83_86360258',
  'variables' => 
  array (
    'title' => 0,
    'site_settings' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55267f906c3e83_86360258')) {function content_55267f906c3e83_86360258($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<aside class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
    </ol>
</aside>

<section class="col-lg-6 col-md-6 col-xs-12">
    <div class="col-lg-12 col-md-12 col-xs-12">

        <div class="panel panel-default">
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

    </div>

    <div class="col-lg-12 col-md-12 col-xs-12">

        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row"><?php echo $_smarty_tpl->tpl_vars['site_settings']->value['contact_html'];?>
</div>
            </div>
        </div>

    </div>

    <div class="col-lg-12 col-md-12 col-xs-12">

        <div class="panel panel-default">
            <div class="panel-heading">Карта </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <?php echo $_smarty_tpl->tpl_vars['site_settings']->value['contact_map'];?>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="col-lg-6 col-md-6 col-xs-12">

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Форма обратной связи</h3>
        </div>
        <div class="panel-body">
            <div class="form-style" id="contact_form">
                <div id="contact_results"></div>
                <div id="contact_body">
                    
                    <div class="form-group">
                        <label class="control-label" for="name">Имя <span class="required">*</span></label>
                        <input type="text" name="name" required="true" class="input-field form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email">Email <span class="required">*</span></label>
                        <input type="email" name="email" required="true" class="input-field form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="phone">Телефон</label>
                        <input type="text" name="phone" required="true" class="tel-number-field form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="subject">Тема сообщения</label>
                        <input type="text" name="subject" required="true" class="input-field form-control"/>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="message">Сообщение</label>
                        <textarea name="message" id="message" class="textarea-field form-control" required="true"></textarea>
                    </div>

                    <div id="captcha" class="input-group form-group">
                        <span class="input-group-btn">
                        <button class="btn btn-primary" id="re" type="button">
                            <span id="rand1" class="badge">40</span> + <span id="rand2" class="badge">49</span> =
                        </button>
                        </span>
                        <input type="text" class="form-control" id="total" autocomplete="off" placeholder="Введите сумму чисел...">
                    </div>
                    
                    <button id="submit_btn" type="submit" class="btn btn-success">Отправить сообщение</button>

                </div>
            </div>
        </div>
    </div>
</section>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
