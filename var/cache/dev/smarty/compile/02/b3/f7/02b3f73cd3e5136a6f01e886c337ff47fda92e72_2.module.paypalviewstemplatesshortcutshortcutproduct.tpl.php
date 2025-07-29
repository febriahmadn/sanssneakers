<?php
/* Smarty version 4.3.4, created on 2025-02-16 12:31:29
  from 'module:paypalviewstemplatesshortcutshortcutproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b178312f03c7_10863693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02b3f73cd3e5136a6f01e886c337ff47fda92e72' => 
    array (
      0 => 'module:paypalviewstemplatesshortcutshortcutproduct.tpl',
      1 => 1736908582,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b178312f03c7_10863693 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin /home/u1573007/public_html/modules/paypal/views/templates/shortcut/shortcut-product.tpl -->


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203864958267b178312e97f8_34086916', 'content');
?>

<!-- end /home/u1573007/public_html/modules/paypal/views/templates/shortcut/shortcut-product.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'module:paypal/views/templates/shortcut/shortcut-layout.tpl');
}
/* {block 'content'} */
class Block_203864958267b178312e97f8_34086916 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_203864958267b178312e97f8_34086916',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <style>
    .product-quantity {
      flex-wrap: wrap;
    }

    .product-quantity [data-container-express-checkout] {
      flex-basis: 100%;
    }
  </style>

  <div data-container-express-checkout data-paypal-source-page="product" style="float:right; margin: 10px 40px 0 0;">
    <form data-paypal-payment-form-cart class="paypal_payment_form" action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action_url']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl ) );?>
" method="post" data-ajax="false">
      <input
              type="hidden"
              name="id_product"
              data-paypal-id-product
              value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paypalIdProduct']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
      />
      <input type="hidden" name="quantity" data-paypal-qty value=""/>
      <input type="hidden" name="combination" data-paypal-combination value="" />
      <input type="hidden" data-paypal-id-product-attribute value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['es_cs_product_attribute']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
      <input type="hidden" name="express_checkout" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PayPal_payment_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
      <input type="hidden" name="current_shop_url" data-paypal-url-page value="" />
      <input type="hidden" id="source_page" name="source_page" value="product">
    </form>
    <div paypal-button-container></div>
  </div>
  <div class="clearfix"></div>
<?php
}
}
/* {/block 'content'} */
}
