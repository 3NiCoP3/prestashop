<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-19 16:42:14
  from '/var/www/html/themes/classic/modules/contactform/views/templates/widget/contactform.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fde1f562e3847_30915107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe625b29f1130a8811131526dbe57209d1131744' => 
    array (
      0 => '/var/www/html/themes/classic/modules/contactform/views/templates/widget/contactform.tpl',
      1 => 1608391940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fde1f562e3847_30915107 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="contact-form">
  <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['contact'], ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>enctype="multipart/form-data"<?php }?>>

    <?php if (!$_smarty_tpl->tpl_vars['notifications']->value || $_smarty_tpl->tpl_vars['notifications']->value['nw_error']) {?>
      <section class="form-fields">

        <div class="form-group row">
          <div class="col-md-9 col-md-offset-3">
            <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sauvegardez votre photo','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h3>
          </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['contact']->value['allow_file_upload']) {?>
          <div class="form-group row">
            <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Photo','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
            <div class="col-md-6">
              <input type="file" name="fileUpload" class="filestyle" data-buttonText="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choisissez votre photo','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
            </div>
          </div>
        <?php }?>

        <div class="form-group row">
          <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Description','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
</label>
          <div class="col-md-9">
            <textarea
              class="form-control"
              name="message"
              placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Donnez une description','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
              rows="3"
            ><?php if ($_smarty_tpl->tpl_vars['contact']->value['message']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['contact']->value['message'], ENT_QUOTES, 'UTF-8');
}?></textarea>
          </div>
        </div>

        <?php if (isset($_smarty_tpl->tpl_vars['id_module']->value)) {?>
          <div class="form-group row">
            <div class="offset-md-3">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

            </div>
          </div>
        <?php }?>

      </section>

      <footer class="form-footer text-sm-right">
        <style>
          input[name=url] {
            display: none !important;
          }
        </style>
        <input type="text" name="url" value=""/>
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['token']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input class="btn btn-primary" type="submit" name="submitMessage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
      </footer>
    <?php }?>

  </form>
</section>
<?php }
}
