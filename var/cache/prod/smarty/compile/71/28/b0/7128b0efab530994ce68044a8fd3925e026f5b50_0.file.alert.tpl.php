<?php
/* Smarty version 4.3.4, created on 2025-06-28 05:54:22
  from '/home/u1573007/public_html/modules/paypal/views/templates/admin/_partials/alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685f211ebd5474_45753132',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7128b0efab530994ce68044a8fd3925e026f5b50' => 
    array (
      0 => '/home/u1573007/public_html/modules/paypal/views/templates/admin/_partials/alert.tpl',
      1 => 1736908582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685f211ebd5474_45753132 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 <?php if ((isset($_smarty_tpl->tpl_vars['widthByContent']->value)) && $_smarty_tpl->tpl_vars['widthByContent']->value) {?>d-inline-block<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['class']->value)) && $_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php }?>">
    <?php if ((isset($_smarty_tpl->tpl_vars['btnClose']->value)) && $_smarty_tpl->tpl_vars['btnClose']->value) {?>
        <button type="button" class="close" data-dismiss="alert">×</button>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }
}
