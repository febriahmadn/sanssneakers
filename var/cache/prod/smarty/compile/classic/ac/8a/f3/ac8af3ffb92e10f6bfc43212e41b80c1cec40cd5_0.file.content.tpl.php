<?php
/* Smarty version 4.3.4, created on 2025-07-25 10:14:21
  from '/home/u1573007/public_html/modules/blockreassurance/views/templates/admin/tabs/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6882f68df137c4_30162871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac8af3ffb92e10f6bfc43212e41b80c1cec40cd5' => 
    array (
      0 => '/home/u1573007/public_html/modules/blockreassurance/views/templates/admin/tabs/content.tpl',
      1 => 1699415592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_6882f68df137c4_30162871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
