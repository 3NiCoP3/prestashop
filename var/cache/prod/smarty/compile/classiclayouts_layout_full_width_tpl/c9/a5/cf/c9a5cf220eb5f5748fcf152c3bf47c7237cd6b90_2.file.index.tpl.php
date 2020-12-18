<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 16:08:29
  from '/var/www/html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8d16d4e2666_35702293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9a5cf220eb5f5748fcf152c3bf47c7237cd6b90' => 
    array (
      0 => '/var/www/html/themes/classic/templates/index.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8d16d4e2666_35702293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19449132975fd8d16d4e0b31_97730186', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1195530955fd8d16d4e0f69_90322109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_2770458035fd8d16d4e17b4_98210542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_5219026755fd8d16d4e1474_93035580 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2770458035fd8d16d4e17b4_98210542', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19449132975fd8d16d4e0b31_97730186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_19449132975fd8d16d4e0b31_97730186',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1195530955fd8d16d4e0f69_90322109',
  ),
  'page_content' => 
  array (
    0 => 'Block_5219026755fd8d16d4e1474_93035580',
  ),
  'hook_home' => 
  array (
    0 => 'Block_2770458035fd8d16d4e17b4_98210542',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1195530955fd8d16d4e0f69_90322109', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5219026755fd8d16d4e1474_93035580', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
