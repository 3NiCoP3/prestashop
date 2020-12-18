<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-15 16:05:00
  from '/var/www/html/admin272gihg38/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fd8d09cc31ab9_54436024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db9122d91e345e3ed169caa5ee7e41ba836923a7' => 
    array (
      0 => '/var/www/html/admin272gihg38/themes/default/template/content.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fd8d09cc31ab9_54436024 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
