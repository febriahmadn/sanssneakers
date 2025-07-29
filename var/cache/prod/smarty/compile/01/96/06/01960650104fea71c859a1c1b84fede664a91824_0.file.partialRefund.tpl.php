<?php
/* Smarty version 4.3.4, created on 2025-06-28 05:54:22
  from '/home/u1573007/public_html/modules/paypal/views/templates/hook/partialRefund.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685f211ebf0387_36847104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01960650104fea71c859a1c1b84fede664a91824' => 
    array (
      0 => '/home/u1573007/public_html/modules/paypal/views/templates/hook/partialRefund.tpl',
      1 => 1736908582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685f211ebf0387_36847104 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
  
    // add checkbox
    $(document).ready(() => {
        var chb_paypal_refund = '<?php echo $_smarty_tpl->tpl_vars['chb_paypal_refund']->value;?>
';

        // Make partial order refund in Order page in BO
        $(document).on('click', '#desc-order-partial_refund', function(){

            // Create checkbox and insert for Paypal refund
            if ($('#doPartialRefundPaypal').length == 0) {
                let newCheckBox = `<p class="checkbox"><label for="doPartialRefundPaypal">
                        <input type="checkbox" id="doPartialRefundPaypal" name="doPartialRefundPaypal" value="1">
                          ${chb_paypal_refund}</label></p>`;
                $('button[name=partialRefund]').parent('.partial_refund_fields').prepend(newCheckBox);
            }
        });

        $(document).on('click', '.partial-refund-display', function(){
            // Create checkbox and insert for Paypal refund
            if ($('#doPartialRefundPaypal').length == 0) {
                let newCheckBox = `
                        <div class="cancel-product-element form-group" style="display: block;">
                                <div class="checkbox">
                                    <div class="md-checkbox md-checkbox-inline">
                                      <label>
                                          <input type="checkbox" id="doPartialRefundPaypal" name="doPartialRefundPaypal" material_design="material_design" value="1">
                                          <i class="md-checkbox-control"></i>
                                            ${chb_paypal_refund}
                                        </label>
                                    </div>
                                </div>
                         </div>`;

                $('.refund-checkboxes-container').prepend(newCheckBox);
            }
        });
    });
  
<?php echo '</script'; ?>
>
<?php }
}
