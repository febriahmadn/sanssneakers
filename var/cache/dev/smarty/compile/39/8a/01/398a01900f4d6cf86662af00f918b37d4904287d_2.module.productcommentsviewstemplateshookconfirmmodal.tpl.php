<?php
/* Smarty version 4.3.4, created on 2025-02-16 12:31:29
  from 'module:productcommentsviewstemplateshookconfirmmodal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b178313a3f57_09658712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '398a01900f4d6cf86662af00f918b37d4904287d' => 
    array (
      0 => 'module:productcommentsviewstemplateshookconfirmmodal.tpl',
      1 => 1713949824,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b178313a3f57_09658712 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/u1573007/public_html/modules/productcomments/views/templates/hook/confirm-modal.tpl -->
<?php $_smarty_tpl->_assignInScope('icon', (($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? 'check_circle' ?? null : $tmp));
$_smarty_tpl->_assignInScope('modal_message', (($tmp = $_smarty_tpl->tpl_vars['modal_message']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<?php echo '<script'; ?>
 type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
    const confirmModal = $('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['modal_id']->value, ENT_QUOTES, 'UTF-8');?>
');
    confirmModal.on('hidden.bs.modal', function () {
      confirmModal.modal('hide');
      confirmModal.trigger('modal:confirm', false);
    });

    $('.confirm-button', confirmModal).click(function() {
      confirmModal.trigger('modal:confirm', true);
    });
    $('.refuse-button', confirmModal).click(function() {
      confirmModal.trigger('modal:confirm', false);
    });
  });
<?php echo '</script'; ?>
>

<div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['modal_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="modal fade product-comment-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <p class="h2">
          <i class="material-icons <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
" data-icon="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['icon']->value, ENT_QUOTES, 'UTF-8');?>
"></i>
          <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['modal_title']->value, ENT_QUOTES, 'UTF-8');?>

        </p>
      </div>
      <div class="modal-body">
        <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['modal_id']->value, ENT_QUOTES, 'UTF-8');?>
-message">
          <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['modal_message']->value, ENT_QUOTES, 'UTF-8');?>

        </div>
        <div class="post-comment-buttons">
          <button type="button" class="btn btn-comment-inverse btn-comment-huge refuse-button" data-dismiss="modal">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

          </button>
          <button type="button" class="btn btn-comment btn-comment-huge confirm-button" data-dismiss="modal">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>

          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end /home/u1573007/public_html/modules/productcomments/views/templates/hook/confirm-modal.tpl --><?php }
}
