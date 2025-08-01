<?php
/* Smarty version 4.3.4, created on 2025-02-16 12:06:45
  from 'module:blockwishlistviewstemplatescomponentsmodalscreate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b17265c285a4_45029754',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8d086f3098974d41bc92b06c33cf9e584313501' => 
    array (
      0 => 'module:blockwishlistviewstemplatescomponentsmodalscreate.tpl',
      1 => 1728035264,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b17265c285a4_45029754 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/u1573007/public_html/modules/blockwishlist/views/templates/components/modals/create.tpl -->
<div
  class="wishlist-create"
  data-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['url']->value, ENT_QUOTES, 'UTF-8');?>
"
  data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create wishlist','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
  data-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist name','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
  data-placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add name','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
  data-cancel-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
  data-create-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create wishlist','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
  data-length-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'List title is too short','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
>
  <div
    class="wishlist-modal modal fade"
    
      :class="{show: !isHidden}"
    
    tabindex="-1"
    role="dialog"
    aria-modal="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">((title))</h5>
          <button
            type="button"
            class="close"
            @click="toggleModal"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group form-group-lg">
            <label class="form-control-label" for="input2">((label))</label>
            <input
              type="text"
              class="form-control form-control-lg"
              v-model="value"
              id="input2"
              :placeholder="placeholder"
            />
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="modal-cancel btn btn-secondary"
            data-dismiss="modal"
            @click="toggleModal"
          >
            ((cancelText))
          </button>

          <button
            type="button"
            class="btn btn-primary"
            @click="createWishlist"
          >
            ((createText))
          </button>
        </div>
      </div>
    </div>
  </div>

  <div 
    class="modal-backdrop fade"
    
      :class="{in: !isHidden}"
    
  >
  </div>
</div>

<!-- end /home/u1573007/public_html/modules/blockwishlist/views/templates/components/modals/create.tpl --><?php }
}
