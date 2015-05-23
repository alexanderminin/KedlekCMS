<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-12 10:13:21
         compiled from "templates\admin\menu.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3601552674124f5e00-69367630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '195db2f2056a1fe2b2a381208065cc0696048b42' => 
    array (
      0 => 'templates\\admin\\menu.page.tpl',
      1 => 1428822794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3601552674124f5e00-69367630',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552674128ab265_16166086',
  'variables' => 
  array (
    'targets' => 0,
    'menu_list' => 0,
    'item' => 0,
    'active_menu' => 0,
    'child' => 0,
    'child2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552674128ab265_16166086')) {function content_552674128ab265_16166086($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-lg-6 col-md-6 col-xs-12">

    <div class="col-lg-12 col-md-12 col-xs-12">

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Добавить пункт меню</h3>
            </div>
            <div class="panel-body" id="menu_add_section">

                <form role="form" action="/admin/menu/add" method="post">

                    <div class="form-group">
                        <label>Заголовок</label>
                        <input type="text" class="form-control" id="menu_add_section_title_input" name="title" placeholder="Название пункта меню" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label">Ссылка</label>

                        <select class="form-control" id="menu_add_section_adr_input" name="target">
                            
                            <option value="notvalue">-- Список ссылок --</option>
                            
                            <?php echo $_smarty_tpl->tpl_vars['targets']->value;?>


                            <optgroup label="Спец. страницы">
                                <option value="/home">Главная</option>
                                <option value="/contact">Контакты</option>
                            </optgroup>

                            <optgroup label="Другое">
                                <option value="myself">Своя ссылка</option>
                                <option value="#">Разделитель меню</option>
                            </optgroup>


                        </select>

                    </div>

                    <button id="menu_add_section_button_add" type="submit" class="btn btn-success" disabled="disabled">Добавить</button>

                </form>

            </div>
        </div>

    </div>

    <div class="col-lg-12 col-md-12 col-xs-12">

        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">Доступные пункты меню</h3>
            </div>
            <div class="panel-body" id="menu_not_active_area">

                <div class="dd" id="nestable2">

                    <?php if (count($_smarty_tpl->tpl_vars['menu_list']->value)==0) {?>

                        <div class="dd-empty"></div>
                    
                    <?php } else { ?>

                        <ol class="dd-list">
                            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

                                <li class="dd-item dd3-item" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">
                                    <div class="dd-handle dd3-handle">Drag</div>
                                    <div class="dd3-content">
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['target']!='#') {?>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" target="_blanc"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                                        <?php }?>
                                        <a href="/admin/menu/del/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-danger btn-circle" style="float: right; margin-right:5px;"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                </li>

                            <?php } ?>
                        </ol>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="col-lg-6 col-md-6 col-xs-12">

    <div class="col-lg-12 col-md-12 col-xs-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">Активные пункты меню</h3>
            </div>
            <div class="panel-body" id="menu_active_area">

                <div class="dd" id="nestable">

                    <?php if (count($_smarty_tpl->tpl_vars['active_menu']->value)==0) {?>

                        <div class="dd-empty"></div>
                    
                    <?php } else { ?>

                    <ol class="dd-list">
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['active_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

                            <li class="dd-item dd3-item" data-id="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">

                                <div class="dd-handle dd3-handle">Drag</div>
                                <div class="dd3-content">
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['target']!='#') {?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" target="_blanc"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>

                                    <?php }?>
                                    <span class="delete-button"  style="float: right; margin-right:5px;"><a href="/admin/menu/del/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></a></span>
                                </div>
                                
                                <?php if (isset($_smarty_tpl->tpl_vars['item']->value['childs'])) {?>

                                    <ol class="dd-list">
                                
                                        <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>

                                            <li class="dd-item dd3-item" data-id="<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
">
                                                <div class="dd-handle dd3-handle">Drag</div>
                                                <div class="dd3-content">
                                                    <?php if ($_smarty_tpl->tpl_vars['child']->value['target']!='#') {?>
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['child']->value['target'];?>
" target="_blanc"><?php echo $_smarty_tpl->tpl_vars['child']->value['title'];?>
</a>
                                                    <?php } else { ?>
                                                        <?php echo $_smarty_tpl->tpl_vars['child']->value['title'];?>

                                                    <?php }?>
                                                    <a href="/admin/menu/del/<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
" class="btn btn-danger btn-circle" style="float: right; margin-right:5px;"><i class="fa fa-trash-o"></i></a>
                                                </div>

                                                    <?php if (isset($_smarty_tpl->tpl_vars['child']->value['childs'])) {?>

                                                        <ol class="dd-list">
                                                    
                                                            <?php  $_smarty_tpl->tpl_vars['child2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['child']->value['childs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child2']->key => $_smarty_tpl->tpl_vars['child2']->value) {
$_smarty_tpl->tpl_vars['child2']->_loop = true;
?>

                                                                <li class="dd-item dd3-item" data-id="<?php echo $_smarty_tpl->tpl_vars['child2']->value['id'];?>
">
                                                                    <div class="dd-handle dd3-handle">Drag</div>
                                                                    <div class="dd3-content">
                                                                        <?php if ($_smarty_tpl->tpl_vars['child2']->value['target']!='#') {?>
                                                                            <a href="<?php echo $_smarty_tpl->tpl_vars['child2']->value['target'];?>
" target="_blanc"><?php echo $_smarty_tpl->tpl_vars['child2']->value['title'];?>
</a>
                                                                        <?php } else { ?>
                                                                            <?php echo $_smarty_tpl->tpl_vars['child2']->value['title'];?>

                                                                        <?php }?>
                                                                        <a href="/admin/menu/del/<?php echo $_smarty_tpl->tpl_vars['child2']->value['id'];?>
" class="btn btn-danger btn-circle" style="float: right; margin-right:5px;"><i class="fa fa-trash-o"></i></a>
                                                                    </div>
                                                                </li>
                                                            
                                                            <?php } ?>
                                                    
                                                        </ol>

                                                    <?php }?>

                                            </li>
                                        
                                        <?php } ?>
                                
                                    </ol>

                                <?php }?>

                            </li>
                        <?php } ?>
                    </ol>
                    <?php }?>
                </div>

            </div>
        </div>
    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
