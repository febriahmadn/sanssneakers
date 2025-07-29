<?php
/* Smarty version 4.3.4, created on 2025-03-14 22:25:16
  from '/home/u1573007/public_html/adminsite/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d44a5c0fc5a6_93109203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1821a9de0dafd155ecc00457eec6c4323055c4f3' => 
    array (
      0 => '/home/u1573007/public_html/adminsite/themes/new-theme/template/content.tpl',
      1 => 1718342660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d44a5c0fc5a6_93109203 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
