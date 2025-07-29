<?php
/* Smarty version 4.3.4, created on 2025-06-28 03:23:11
  from 'module:paypalviewstemplatesfrontpayment_infos_card.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685efdaf851ca3_65223984',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2e04d6622831e93c0038e945fd286e24def7782' => 
    array (
      0 => 'module:paypalviewstemplatesfrontpayment_infos_card.tpl',
      1 => 1736908582,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685efdaf851ca3_65223984 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You will be redirected to the PayPal website to process your card payment.','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal secures your payment and protect your financial information with strong encryption tools.','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
<?php }
}
