<?php
/* Smarty version 4.3.4, created on 2025-06-28 03:24:16
  from '/home/u1573007/public_html/themes/classic/templates/checkout/_partials/order-confirmation-table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685efdf0a3beb7_02383296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe0fda9a9c1c32961a826d6d0f56e4c7d1c97c80' => 
    array (
      0 => '/home/u1573007/public_html/themes/classic/templates/checkout/_partials/order-confirmation-table.tpl',
      1 => 1708941642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685efdf0a3beb7_02383296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="order-items" class="col-md-12">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_832564769685efdf0a16b64_87712398', 'order_items_table_head');
?>

  </div>

  <div class="order-confirmation-table">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1093873997685efdf0a18c34_40658738', 'order_confirmation_table');
?>


  </div>
</div>
<?php }
/* {block 'order_items_table_head'} */
class Block_832564769685efdf0a16b64_87712398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_items_table_head' => 
  array (
    0 => 'Block_832564769685efdf0a16b64_87712398',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h3 class="card-title h3 col-md-6 col-12"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order items','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h3>
      <h3 class="card-title h3 col-md-2 text-md-center _desktop-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unit price','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h3>
      <h3 class="card-title h3 col-md-2 text-md-center _desktop-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h3>
      <h3 class="card-title h3 col-md-2 text-md-center _desktop-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total products','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h3>
    <?php
}
}
/* {/block 'order_items_table_head'} */
/* {block 'order_confirmation_table'} */
class Block_1093873997685efdf0a18c34_40658738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_confirmation_table' => 
  array (
    0 => 'Block_1093873997685efdf0a18c34_40658738',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u1573007/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="order-line row">
          <div class="col-sm-2 col-xs-3">
            <span class="image">
              <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image'])) {?>
                <picture>
                  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['medium']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['medium']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                  <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['medium']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['medium']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                  <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" />
                </picture>
              <?php } else { ?>
                <picture>
                  <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                  <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                  <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['medium_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" />
                </picture>
              <?php }?>
            </span>
          </div>
          <div class="col-sm-4 col-xs-9 details">
            <?php if ($_smarty_tpl->tpl_vars['add_product_link']->value) {?><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php }?>
              <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['add_product_link']->value) {?></a><?php }?>
            <?php if (is_array($_smarty_tpl->tpl_vars['product']->value['customizations']) && smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
                <div class="customizations">
                  <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                </div>
                <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
                      </div>
                      <div class="modal-body">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                          <div class="product-customization-line row">
                            <div class="col-sm-3 col-xs-4 label">
                              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                            <div class="col-sm-9 col-xs-8 value">
                              <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                  <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                                <?php } else { ?>
                                  <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                              <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                                <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy">
                              <?php }?>
                            </div>
                          </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>

          </div>
          <div class="col-sm-6 col-xs-12 qty">
            <div class="row">
              <div class="col-xs-4 text-sm-center text-xs-left"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div class="col-xs-4 text-sm-center"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div class="col-xs-4 text-sm-center text-xs-right bold"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>
</div>
            </div>
          </div>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <hr>

      <table>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subtotals']->value, 'subtotal');
$_smarty_tpl->tpl_vars['subtotal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
$_smarty_tpl->tpl_vars['subtotal']->do_else = false;
?>
          <?php if ($_smarty_tpl->tpl_vars['subtotal']->value !== null && $_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax' && $_smarty_tpl->tpl_vars['subtotal']->value['label'] !== null) {?>
            <tr>
              <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</td>
              <td><?php if ('discount' == $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>-&nbsp;<?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</td>
            </tr>
          <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['display_prices_tax_incl'] && $_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
          <tr>
            <td><span class="text-uppercase"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totals']->value['total']['label'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['labels']->value['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span></td>
            <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totals']->value['total']['value'], ENT_QUOTES, 'UTF-8');?>
</td>
          </tr>
          <tr class="total-value font-weight-bold">
            <td><span class="text-uppercase"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totals']->value['total_including_tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span></td>
            <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totals']->value['total_including_tax']['value'], ENT_QUOTES, 'UTF-8');?>
</td>
          </tr>
        <?php } else { ?>
          <tr class="total-value font-weight-bold">
            <td><span class="text-uppercase"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totals']->value['total']['label'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled'] && $_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['labels']->value['tax_short'], ENT_QUOTES, 'UTF-8');
}?></span></td>
            <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['totals']->value['total']['value'], ENT_QUOTES, 'UTF-8');?>
</td>
          </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['subtotals']->value['tax'] !== null && $_smarty_tpl->tpl_vars['subtotals']->value['tax']['label'] !== null) {?>
          <tr class="sub taxes">
            <td colspan="2"><span class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%label%:','sprintf'=>array('%label%'=>$_smarty_tpl->tpl_vars['subtotals']->value['tax']['label']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>&nbsp;<span class="value"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subtotals']->value['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span></td>
          </tr>
        <?php }?>
      </table>
    <?php
}
}
/* {/block 'order_confirmation_table'} */
}
