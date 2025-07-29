<?php
/* Smarty version 4.3.4, created on 2025-02-16 13:20:13
  from 'module:paypalviewstemplatesfrontpayment_infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b1839dcb8647_89870595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffea87e3807e697178ee8347672b825b80d76d45' => 
    array (
      0 => 'module:paypalviewstemplatesfrontpayment_infos.tpl',
      1 => 1736908582,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b1839dcb8647_89870595 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/u1573007/public_html/modules/paypal/views/templates/front/payment_infos.tpl -->

<div class="pp-info" data-pp-info>
  <div class="row">
    <div class="col-md-6 item pp__mb-3">
      <div><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/paypal/views/img/advantage-logos/verified_user.png" alt=""></div>
      <div class="header pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Safer and more protected','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
      <div class="desc pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Buyer protection and free return shipping covers eligible purchase.','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
    </div>
    <div class="col-md-6 item pp__mb-3">
      <div><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/paypal/views/img/advantage-logos/language.png" alt=""></div>
      <div class="header pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Simple and convenient','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
      <div class="desc pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use your account from wherever in the world you shop.','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 item pp__mb-3">
      <div><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/paypal/views/img/advantage-logos/offline_bolt.png" alt=""></div>
      <div class="header pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wherever you are','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
      <div class="desc pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pay fast from any device without entering your financial details.','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
    </div>
    <div class="col-md-6 item pp__mb-3">
      <div><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
modules/paypal/views/img/advantage-logos/monetization.png" alt=""></div>
      <div class="header pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No additional fees','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
      <div class="desc pp__pt-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Skip entering your financial info, PayPal keeps your data secure.','mod'=>'paypal'),$_smarty_tpl ) );?>
</div>
    </div>
  </div>
</div>

<div data-paypal-info class="pp__pl-2 pp__d-table-cell" style="display: none">
  <a href="#"
     class="pp__text-primary"
     data-paypal-info-popover
     data-html="true"
     data-container="body"
     data-content=""
  >
    <i class="material-icons">info</i>
  </a>
</div>
<!-- end /home/u1573007/public_html/modules/paypal/views/templates/front/payment_infos.tpl --><?php }
}
