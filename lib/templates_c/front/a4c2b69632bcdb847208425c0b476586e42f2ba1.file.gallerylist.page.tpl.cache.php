<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-03 15:46:56
         compiled from "templates\front\gallerylist.page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32385554618c0006d96-05923144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4c2b69632bcdb847208425c0b476586e42f2ba1' => 
    array (
      0 => 'templates\\front\\gallerylist.page.tpl',
      1 => 1429708841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32385554618c0006d96-05923144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'items' => 0,
    'item' => 0,
    'Page' => 0,
    'Prev_Page' => 0,
    'menu_active' => 0,
    'pag_urls' => 0,
    'pag_url' => 0,
    'Next_Page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554618c0114655_78403034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554618c0114655_78403034')) {function content_554618c0114655_78403034($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>


<div class="col-lg-12 col-md-12 col-xs-12">
    <ol class="breadcrumb">
        <li><a href="/home">Главная</a></li>
        <li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
    </ol>
</div>

<div class="col-lg-12 col-md-12 col-xs-12">

    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

            <?php if ($_smarty_tpl->tpl_vars['item']->value['type']==2) {?>
                
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $_smarty_tpl->tpl_vars['item']->value['file'];?>
?hd=1&rel=0" allowfullscreen></iframe>
                        </div>
                        <div class="caption">
                        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3>
                        <p><span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['item']->value['datetime'];?>
</span></p>
                        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['descr'];?>
</p>
                        </div>
                    </div>
                </div>

            <?php } else { ?>

                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="thumbnail">
                        <div class="embed-responsive embed-responsive-4by3">
                            <a href="/view/<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
" class="img-thumbnail thumb-div" >
                                <img class="img-responsive thumb-img" src="/images/<?php echo $_smarty_tpl->tpl_vars['item']->value['thumb'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
">
                            </a>
                        </div>
                        <div class="caption">
                            <a href="/view/<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
"><h3><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h3></a>
                            <p><span class="label label-default"><?php echo $_smarty_tpl->tpl_vars['item']->value['datetime'];?>
</span></p>
                            <p><?php echo $_smarty_tpl->tpl_vars['item']->value['descr'];?>
</p>
                        </div>
                    </div>
                </div>

            <?php }?>

        <?php } ?>

</div>

<?php if (isset($_smarty_tpl->tpl_vars['Page']->value)) {?>
<div class="col-lg-12 col-md-12 col-xs-12">
    <nav>
        <ul class="pagination">

            <?php if (isset($_smarty_tpl->tpl_vars['Prev_Page']->value)) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['menu_active']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Prev_Page']->value;?>
" aria-label="Пред.">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            <?php }?>

            <?php  $_smarty_tpl->tpl_vars['pag_url'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pag_url']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pag_urls']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pag_url']->key => $_smarty_tpl->tpl_vars['pag_url']->value) {
$_smarty_tpl->tpl_vars['pag_url']->_loop = true;
?>

                <?php if ($_smarty_tpl->tpl_vars['pag_url']->value==$_smarty_tpl->tpl_vars['Page']->value) {?>
                    <li class='active'><a href='#'><?php echo $_smarty_tpl->tpl_vars['pag_url']->value;?>
</a></li>
                <?php } else { ?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['menu_active']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['pag_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pag_url']->value;?>
</a></li>
                <?php }?>

            <?php } ?>

            <?php if (isset($_smarty_tpl->tpl_vars['Next_Page']->value)) {?>
                <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['menu_active']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Next_Page']->value;?>
" aria-label="След.">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            <?php }?>

        </ul>
    </nav>
</div>
<?php }?>


<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
<?php }} ?>
