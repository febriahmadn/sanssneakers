<?php
/* Smarty version 4.3.4, created on 2025-02-16 12:06:45
  from 'module:ps_currencyselectorps_currencyselector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b1726590de99_99462908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:ps_currencyselectorps_currencyselector.tpl',
      1 => 1708941642,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b1726590de99_99462908 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/u1573007/public_html/themes/classic/modules/ps_currencyselector/ps_currencyselector.tpl -->
<div id="_desktop_currency_selector">
  <div class="currency-selector dropdown js-dropdown">
    <span id="currency-selector-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <button data-toggle="dropdown" class="hidden-sm-down btn-unstyle" aria-haspopup="true" aria-expanded="false" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency dropdown','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
      <span class="expand-more _gray-darker"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['current_currency']->value['iso_code'] !== $_smarty_tpl->tpl_vars['current_currency']->value['sign']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_currency']->value['sign'], ENT_QUOTES, 'UTF-8');
}?></span>
      <i class="material-icons expand-more">&#xE5C5;</i>
    </button>
    <ul class="dropdown-menu hidden-sm-down" aria-labelledby="currency-selector-label">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
          <a title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['currency']->value['sign'] !== $_smarty_tpl->tpl_vars['currency']->value['iso_code']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');
}?></a>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <select class="link hidden-md-up" aria-labelledby="currency-selector-label">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['currency']->value['sign'] !== $_smarty_tpl->tpl_vars['currency']->value['iso_code']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');
}?></option>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
  </div>
</div>
<!-- end /home/u1573007/public_html/themes/classic/modules/ps_currencyselector/ps_currencyselector.tpl --><?php }
}
