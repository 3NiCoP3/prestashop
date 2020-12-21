<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 18:42:21
  from '/var/www/html/modules/ps_emailsubscription/views/templates/admin/list_action_viewcustomer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdf8cfd5731f5_11020266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '389c2d3e956254971bb6407a58c2e1b3cff92beb' => 
    array (
      0 => '/var/www/html/modules/ps_emailsubscription/views/templates/admin/list_action_viewcustomer.tpl',
      1 => 1592460816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdf8cfd5731f5_11020266 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" class="edit btn btn-default <?php if ($_smarty_tpl->tpl_vars['disable']->value) {?>disabled<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-search-plus"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }
}
