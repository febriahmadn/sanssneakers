<?php
/* Smarty version 4.3.4, created on 2025-02-16 12:06:45
  from 'module:ps_searchbarps_searchbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b172659afdf0_80970709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:ps_searchbarps_searchbar.tpl',
      1 => 1649829418,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b172659afdf0_80970709 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/u1573007/public_html/modules/ps_searchbar/ps_searchbar.tpl -->
<div id="search_widget" class="search-widgets" data-search-controller-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
  <form method="get" action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
    <input type="hidden" name="controller" value="search">
    <i class="material-icons search" aria-hidden="true">search</i>
    <input type="text" name="s" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
    <i class="material-icons clear" aria-hidden="true">clear</i>
  </form>
</div>
<!-- end /home/u1573007/public_html/modules/ps_searchbar/ps_searchbar.tpl --><?php }
}
