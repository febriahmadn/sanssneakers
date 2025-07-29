<?php
/* Smarty version 4.3.4, created on 2025-06-28 03:24:16
  from 'module:paypalviewstemplateshookorder_confirmation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685efdf08985c1_86230042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '464d379ece810c92fef376dbfbf507a0cc9d2ed8' => 
    array (
      0 => 'module:paypalviewstemplateshookorder_confirmation.tpl',
      1 => 1736908582,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685efdf08985c1_86230042 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['error_msg']->value))) {?>
<div class="alert alert-danger">
    <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error_msg']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

</div>
<?php }?>
<li data-paypal-transaction-id>
    <?php if ($_smarty_tpl->tpl_vars['method']->value == 'BT') {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Braintree transaction id:','mod'=>'paypal'),$_smarty_tpl ) );?>

    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal transaction id:','mod'=>'paypal'),$_smarty_tpl ) );?>

    <?php }?>
    <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['transaction_id']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

</li>
<?php if ((isset($_smarty_tpl->tpl_vars['ppp_information']->value))) {?>
    <dl>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bank name','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ppp_information']->value->recipient_banking_instruction->bank_name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account holder name','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ppp_information']->value->recipient_banking_instruction->account_holder_name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'IBAN','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ppp_information']->value->recipient_banking_instruction->international_bank_account_number,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'BIC','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ppp_information']->value->recipient_banking_instruction->bank_identifier_code,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Amount due / currency','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ppp_information']->value->amount->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ppp_information']->value->amount->currency,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment due date','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ppp_information']->value->payment_due_date,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

        </dd>
        <dd>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','mod'=>'paypal'),$_smarty_tpl ) );?>
 : <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ppp_information']->value->reference_number,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

        </dd>
    </dl>
<?php }
}
}
