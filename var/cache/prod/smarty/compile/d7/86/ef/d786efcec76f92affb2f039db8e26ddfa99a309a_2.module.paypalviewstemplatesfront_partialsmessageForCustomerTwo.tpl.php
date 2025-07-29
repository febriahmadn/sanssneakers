<?php
/* Smarty version 4.3.4, created on 2025-06-28 03:23:11
  from 'module:paypalviewstemplatesfront_partialsmessageForCustomerTwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685efdaf7445f1_86713698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd786efcec76f92affb2f039db8e26ddfa99a309a' => 
    array (
      0 => 'module:paypalviewstemplatesfront_partialsmessageForCustomerTwo.tpl',
      1 => 1736908582,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685efdaf7445f1_86713698 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
    <?php if ((isset($_smarty_tpl->tpl_vars['isSandbox']->value)) && $_smarty_tpl->tpl_vars['isSandbox']->value) {?>
      <div>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sandbox mode: all transactions will be fictitious.','mod'=>'paypal'),$_smarty_tpl ) );?>

      </div>
    <?php }?>

    <div>
        <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have to [b]finish your payment[/b] done with your PayPal account ','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable1);?>
 <?php if ((isset($_smarty_tpl->tpl_vars['paypalEmail']->value))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paypalEmail']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>
    </div>

    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'by accepting the terms of service and clicking on the order validation button below.','mod'=>'paypal'),$_smarty_tpl ) );?>

    </div>

    <br>

    <div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please note that the additional delivery fees (%1s) have been applied. For more details, please check your order summary.','sprintf'=>array($_smarty_tpl->tpl_vars['carrierFees']->value),'mod'=>'paypal'),$_smarty_tpl ) );?>

    </div>
</div>
<?php }
}
