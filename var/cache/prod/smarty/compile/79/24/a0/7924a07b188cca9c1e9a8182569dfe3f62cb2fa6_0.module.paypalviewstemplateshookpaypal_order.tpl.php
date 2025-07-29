<?php
/* Smarty version 4.3.4, created on 2025-06-28 05:54:22
  from 'module:paypalviewstemplateshookpaypal_order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685f211ebe8297_55518018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7924a07b188cca9c1e9a8182569dfe3f62cb2fa6' => 
    array (
      0 => 'module:paypalviewstemplateshookpaypal_order.tpl',
      1 => 1736908582,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685f211ebe8297_55518018 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="module_warning">
  <?php echo $_smarty_tpl->tpl_vars['paypal_msg']->value;?>
 </div>
<?php echo '<script'; ?>
>
    $('.kpi-container').after($('.paypal-warning').parents('.module_warning'));
<?php echo '</script'; ?>
>
<?php }
}
