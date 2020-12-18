<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 16:08:29
  from '/var/www/html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8d16d596500_74138961',
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
function content_5fd8d16d596500_74138961 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1580251985fd8d16d586155_85654910', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_5413266505fd8d16d588ea9_59864350 extends Smarty_Internal_Block
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
class Block_3732828795fd8d16d587b01_06083839 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5413266505fd8d16d588ea9_59864350', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_660438715fd8d16d5949e0_23716544 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1941375165fd8d16d594f57_79804232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_5208661865fd8d16d5944e7_72105637 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_660438715fd8d16d5949e0_23716544', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1941375165fd8d16d594f57_79804232', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_20439546765fd8d16d595a11_99373291 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_18939949115fd8d16d5955f2_27013055 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20439546765fd8d16d595a11_99373291', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_1580251985fd8d16d586155_85654910 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1580251985fd8d16d586155_85654910',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_3732828795fd8d16d587b01_06083839',
  ),
  'page_title' => 
  array (
    0 => 'Block_5413266505fd8d16d588ea9_59864350',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_5208661865fd8d16d5944e7_72105637',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_660438715fd8d16d5949e0_23716544',
  ),
  'page_content' => 
  array (
    0 => 'Block_1941375165fd8d16d594f57_79804232',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18939949115fd8d16d5955f2_27013055',
  ),
  'page_footer' => 
  array (
    0 => 'Block_20439546765fd8d16d595a11_99373291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3732828795fd8d16d587b01_06083839', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5208661865fd8d16d5944e7_72105637', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18939949115fd8d16d5955f2_27013055', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
