<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-18 11:14:32
  from '/var/www/html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdc81080f42d7_83086338',
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
function content_5fdc81080f42d7_83086338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14478150905fdc81080f0e52_41035208', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_38001555fdc81080f1761_23603849 extends Smarty_Internal_Block
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
class Block_16429232955fdc81080f1356_86998652 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38001555fdc81080f1761_23603849', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6067102515fdc81080f2f58_58051808 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_18759223075fdc81080f33b2_21549539 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_10967239825fdc81080f2648_05392833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6067102515fdc81080f2f58_58051808', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18759223075fdc81080f33b2_21549539', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12835259695fdc81080f3bc9_46716809 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16623093965fdc81080f3955_21047134 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12835259695fdc81080f3bc9_46716809', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_14478150905fdc81080f0e52_41035208 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14478150905fdc81080f0e52_41035208',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_16429232955fdc81080f1356_86998652',
  ),
  'page_title' => 
  array (
    0 => 'Block_38001555fdc81080f1761_23603849',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_10967239825fdc81080f2648_05392833',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6067102515fdc81080f2f58_58051808',
  ),
  'page_content' => 
  array (
    0 => 'Block_18759223075fdc81080f33b2_21549539',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16623093965fdc81080f3955_21047134',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12835259695fdc81080f3bc9_46716809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16429232955fdc81080f1356_86998652', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10967239825fdc81080f2648_05392833', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16623093965fdc81080f3955_21047134', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
