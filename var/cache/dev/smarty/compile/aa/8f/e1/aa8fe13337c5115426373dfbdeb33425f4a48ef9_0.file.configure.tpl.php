<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-21 21:03:27
  from '/var/www/html/modules/targetWeb/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fe0ff8facc8d9_81348224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa8fe13337c5115426373dfbdeb33425f4a48ef9' => 
    array (
      0 => '/var/www/html/modules/targetWeb/views/templates/admin/configure.tpl',
      1 => 1608580957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fe0ff8facc8d9_81348224 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
	<table style="width:100%; border-collapse:separate; border-spacing:5px">
		<thead>
		<tr>
			<th>Image</th>
			<th>Description</th>
			<th>Date de création</th>
			<th>Action</th>
		</tr>
		</thead>
		<tbody>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'data');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
?>
			<tr>
				<td><img src="<?php echo $_smarty_tpl->tpl_vars['data']->value['picture_path'];?>
" alt="" height=50 width=50></img></td>
				<td><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['data']->value['date_create'];?>
</td>
				<td><input class="btn btn-danger btn-sm" type="submit" name="submitDelete" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"></td>
			</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tbody>
	</table>
</div>




<div class="panel">
	<h3><i class="icon icon-credit-card"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'targetWeb','mod'=>'targetWeb'),$_smarty_tpl ) );?>
</h3>
	<p>
		<strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here is my new generic module!','mod'=>'targetWeb'),$_smarty_tpl ) );?>
</strong><br />
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thanks to PrestaShop, now I have a great module.','mod'=>'targetWeb'),$_smarty_tpl ) );?>
<br />
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I can configure it using the following configuration form.','mod'=>'targetWeb'),$_smarty_tpl ) );?>

	</p>
	<br />
	<p>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module will boost your sales!','mod'=>'targetWeb'),$_smarty_tpl ) );?>

	</p>
</div>

<div class="panel">
	<h3><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Documentation','mod'=>'targetWeb'),$_smarty_tpl ) );?>
</h3>
	<p>
		&raquo; <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can get a PDF documentation to configure this module','mod'=>'targetWeb'),$_smarty_tpl ) );?>
 :
		<ul>
			<li><a href="#" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'English','mod'=>'targetWeb'),$_smarty_tpl ) );?>
</a></li>
			<li><a href="#" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'French','mod'=>'targetWeb'),$_smarty_tpl ) );?>
</a></li>
		</ul>
	</p>
</div>
<?php }
}
