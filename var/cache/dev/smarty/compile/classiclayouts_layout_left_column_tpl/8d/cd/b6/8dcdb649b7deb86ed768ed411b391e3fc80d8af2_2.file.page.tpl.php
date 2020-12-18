<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-18 11:37:56
  from '/var/www/html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdc8684dcd482_44231408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dcdb649b7deb86ed768ed411b391e3fc80d8af2' => 
    array (
      0 => '/var/www/html/themes/classic/templates/page.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdc8684dcd482_44231408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14261743455fdc8684dca5b8_18406819', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_9670010175fdc8684dcae22_61415105 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_18351532375fdc8684dca975_61432057 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9670010175fdc8684dcae22_61415105', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_105372435fdc8684dcbee2_08079144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_19075983635fdc8684dcc263_54936645 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13603317875fdc8684dcbc35_34367728 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105372435fdc8684dcbee2_08079144', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19075983635fdc8684dcc263_54936645', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_10744460325fdc8684dcccd0_83868322 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7250210455fdc8684dcc814_30154109 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10744460325fdc8684dcccd0_83868322', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_14261743455fdc8684dca5b8_18406819 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14261743455fdc8684dca5b8_18406819',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_18351532375fdc8684dca975_61432057',
  ),
  'page_title' => 
  array (
    0 => 'Block_9670010175fdc8684dcae22_61415105',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_13603317875fdc8684dcbc35_34367728',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_105372435fdc8684dcbee2_08079144',
  ),
  'page_content' => 
  array (
    0 => 'Block_19075983635fdc8684dcc263_54936645',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7250210455fdc8684dcc814_30154109',
  ),
  'page_footer' => 
  array (
    0 => 'Block_10744460325fdc8684dcccd0_83868322',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18351532375fdc8684dca975_61432057', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13603317875fdc8684dcbc35_34367728', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7250210455fdc8684dcc814_30154109', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
