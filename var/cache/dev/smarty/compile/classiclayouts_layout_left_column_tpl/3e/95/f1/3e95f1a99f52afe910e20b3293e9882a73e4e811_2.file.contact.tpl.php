<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-21 19:22:50
  from '/var/www/html/themes/classic/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe0e7fa5a6678_22229319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e95f1a99f52afe910e20b3293e9882a73e4e811' => 
    array (
      0 => '/var/www/html/themes/classic/templates/contact.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe0e7fa5a6678_22229319 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4582456485fe0e7fa562bc0_31030513', 'page_header_container');
?>


<?php if ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-left-column.tpl') {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19674920135fe0e7fa58a2f7_15082055', "left_column");
?>

<?php } elseif ($_smarty_tpl->tpl_vars['layout']->value === 'layouts/layout-right-column.tpl') {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2282668875fe0e7fa5a4997_62046459', "right_column");
?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19925716575fe0e7fa5a59a0_45665428', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_header_container'} */
class Block_4582456485fe0e7fa562bc0_31030513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_4582456485fe0e7fa562bc0_31030513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block "left_column"} */
class Block_19674920135fe0e7fa58a2f7_15082055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_19674920135fe0e7fa58a2f7_15082055',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="left-column" class="col-xs-12 col-sm-4 col-md-3">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayLeftColumn'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_2282668875fe0e7fa5a4997_62046459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_2282668875fe0e7fa5a4997_62046459',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="right-column" class="col-xs-12 col-sm-4 col-md-3">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_contactinfo",'hook'=>'displayRightColumn'),$_smarty_tpl ) );?>

    </div>
  <?php
}
}
/* {/block "right_column"} */
/* {block 'page_content'} */
class Block_19925716575fe0e7fa5a59a0_45665428 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_19925716575fe0e7fa5a59a0_45665428',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"contactform"),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_content'} */
}
