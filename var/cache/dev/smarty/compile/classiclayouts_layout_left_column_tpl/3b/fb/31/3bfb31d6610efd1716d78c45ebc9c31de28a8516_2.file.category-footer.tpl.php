<?php
/* Smarty version 4.3.4, created on 2025-02-16 14:55:37
  from '/home/u1573007/public_html/themes/classic/templates/catalog/_partials/category-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b199f9660ba6_83640003',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bfb31d6610efd1716d78c45ebc9c31de28a8516' => 
    array (
      0 => '/home/u1573007/public_html/themes/classic/templates/catalog/_partials/category-footer.tpl',
      1 => 1708941642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b199f9660ba6_83640003 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-footer">
    <?php if ((isset($_smarty_tpl->tpl_vars['category']->value)) && $_smarty_tpl->tpl_vars['category']->value['additional_description'] && $_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="card">
            <div class="card-block category-additional-description">
                <?php echo $_smarty_tpl->tpl_vars['category']->value['additional_description'];?>

            </div>
        </div>
    <?php }?>
</div>
<?php }
}
