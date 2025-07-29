<?php
/* Smarty version 4.3.4, created on 2025-02-16 13:16:35
  from '/home/u1573007/public_html/adminsite/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b182c307fd25_54851195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bb5ea721e49ed55ac586f5207932e8ad00907d7' => 
    array (
      0 => '/home/u1573007/public_html/adminsite/themes/default/template/content.tpl',
      1 => 1718342660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b182c307fd25_54851195 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
