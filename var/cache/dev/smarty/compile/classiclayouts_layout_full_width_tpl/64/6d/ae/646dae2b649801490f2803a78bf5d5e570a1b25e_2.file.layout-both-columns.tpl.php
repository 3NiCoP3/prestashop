<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-18 11:14:32
  from '/var/www/html/themes/classic/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdc81081c66e0_90084230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '646dae2b649801490f2803a78bf5d5e570a1b25e' => 
    array (
      0 => '/var/www/html/themes/classic/templates/layouts/layout-both-columns.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5fdc81081c66e0_90084230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4199132425fdc81081ba974_35367916', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7365688955fdc81081bc4b1_67556171', 'hook_after_body_opening_tag');
?>


    <main>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2099674495fdc81081bcec6_37863079', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8647187815fdc81081be1f8_46609165', 'header');
?>

      </header>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1400921475fdc81081beac4_64190996', 'notifications');
?>


      <section id="wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <div class="container">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1862508135fdc81081bf964_85753892', 'breadcrumb');
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1421699615fdc81081c01f6_35212509', "left_column");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1119244275fdc81081c2269_13755487', "content_wrapper");
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13642575405fdc81081c33e7_02480543', "right_column");
?>

        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5887187435fdc81081c4976_82359506', "footer");
?>

      </footer>

    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11417306565fdc81081c5183_12606499', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3322184615fdc81081c5f94_58992523', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_4199132425fdc81081ba974_35367916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_4199132425fdc81081ba974_35367916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_7365688955fdc81081bc4b1_67556171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_7365688955fdc81081bc4b1_67556171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_2099674495fdc81081bcec6_37863079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_2099674495fdc81081bcec6_37863079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_8647187815fdc81081be1f8_46609165 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_8647187815fdc81081be1f8_46609165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_1400921475fdc81081beac4_64190996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_1400921475fdc81081beac4_64190996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_1862508135fdc81081bf964_85753892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_1862508135fdc81081bf964_85753892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_1421699615fdc81081c01f6_35212509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_1421699615fdc81081c01f6_35212509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_7551584805fdc81081c2984_69261330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <p>Hello world! This is HTML5 Boilerplate.</p>
              <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_1119244275fdc81081c2269_13755487 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_1119244275fdc81081c2269_13755487',
  ),
  'content' => 
  array (
    0 => 'Block_7551584805fdc81081c2984_69261330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="content-wrapper" class="left-column right-column col-sm-4 col-md-6">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7551584805fdc81081c2984_69261330', "content", $this->tplIndex);
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

            </div>
          <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_13642575405fdc81081c33e7_02480543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_13642575405fdc81081c33e7_02480543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
              <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

              <?php } else { ?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

              <?php }?>
            </div>
          <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_5887187435fdc81081c4976_82359506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_5887187435fdc81081c4976_82359506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_11417306565fdc81081c5183_12606499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_11417306565fdc81081c5183_12606499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_3322184615fdc81081c5f94_58992523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_3322184615fdc81081c5f94_58992523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
