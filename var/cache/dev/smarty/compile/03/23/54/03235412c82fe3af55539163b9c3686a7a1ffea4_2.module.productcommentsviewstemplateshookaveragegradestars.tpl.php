<?php
/* Smarty version 4.3.4, created on 2025-02-16 12:31:29
  from 'module:productcommentsviewstemplateshookaveragegradestars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b17831389b49_86071293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03235412c82fe3af55539163b9c3686a7a1ffea4' => 
    array (
      0 => 'module:productcommentsviewstemplateshookaveragegradestars.tpl',
      1 => 1713949824,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b17831389b49_86071293 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/u1573007/public_html/modules/productcomments/views/templates/hook/average-grade-stars.tpl -->
<?php if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
  <div class="comments-note">
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grade','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</span>
    <div class="grade-stars" data-grade="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grade']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
  </div>
<?php }?>
<!-- end /home/u1573007/public_html/modules/productcomments/views/templates/hook/average-grade-stars.tpl --><?php }
}
