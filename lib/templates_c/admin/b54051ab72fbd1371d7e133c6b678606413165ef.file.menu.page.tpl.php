<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-08 17:26:41
         compiled from "templates\admin\menu.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:343155253836be4dc9-38400332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b54051ab72fbd1371d7e133c6b678606413165ef' => 
    array (
      0 => 'templates\\admin\\menu.page.tpl',
      1 => 1428503199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '343155253836be4dc9-38400332',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55253836e3a8c9_98636464',
  'variables' => 
  array (
    'targets' => 0,
    'target_elm' => 0,
    'target_url' => 0,
    'target_cat' => 0,
    'target_title' => 0,
    'menu_list' => 0,
    'item' => 0,
    'active_menu' => 0,
    'child' => 0,
    'child2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55253836e3a8c9_98636464')) {function content_55253836e3a8c9_98636464($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



<div class="col-lg-6">

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
                    <label class="control-label">Страница</label>

                    <select class="form-control" id="menu_add_section_adr_input" name="target">

                        <option value="notvalue">-- Список страниц --</option>
                        <option value="myself">Свой вариант</option>

                        <?php  $_smarty_tpl->tpl_vars['target_elm'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_elm']->_loop = false;
 $_smarty_tpl->tpl_vars['target_cat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['targets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_elm']->key => $_smarty_tpl->tpl_vars['target_elm']->value) {
$_smarty_tpl->tpl_vars['target_elm']->_loop = true;
 $_smarty_tpl->tpl_vars['target_cat']->value = $_smarty_tpl->tpl_vars['target_elm']->key;
?>

                            <?php  $_smarty_tpl->tpl_vars['target_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['target_url']->_loop = false;
 $_smarty_tpl->tpl_vars['target_title'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['target_elm']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['target_url']->key => $_smarty_tpl->tpl_vars['target_url']->value) {
$_smarty_tpl->tpl_vars['target_url']->_loop = true;
 $_smarty_tpl->tpl_vars['target_title']->value = $_smarty_tpl->tpl_vars['target_url']->key;
?>

                              <option value="<?php echo $_smarty_tpl->tpl_vars['target_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['target_cat']->value;
echo $_smarty_tpl->tpl_vars['target_title']->value;?>
</option>

                            <?php } ?>

                        <?php } ?>

                        <option value="/gallery">Спц: Галерея</option>
                        <option value="/contact">Спц: Контакты</option>
                        <option value="/home">Спц: Главная</option>


                    </select>

                </div>

                <button id="menu_add_section_button_add" type="submit" class="btn btn-success" disabled="disabled">Добавить</button>

            </form>

        </div>
    </div>

</div>

<div class="clearfix"></div>

<div class="col-lg-6">
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
                                <div class="dd3-content"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" target="_blanc"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
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

<div class="col-lg-6">
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
                            <div class="dd3-content"><a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['target'];?>
" target="_blanc"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
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
                                            <div class="dd3-content"><a href="<?php echo $_smarty_tpl->tpl_vars['child']->value['target'];?>
" target="_blanc"><?php echo $_smarty_tpl->tpl_vars['child']->value['title'];?>
</a>
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
                                                                <div class="dd3-content"><a href="<?php echo $_smarty_tpl->tpl_vars['child2']->value['target'];?>
" target="_blanc"><?php echo $_smarty_tpl->tpl_vars['child2']->value['title'];?>
</a>
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


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
