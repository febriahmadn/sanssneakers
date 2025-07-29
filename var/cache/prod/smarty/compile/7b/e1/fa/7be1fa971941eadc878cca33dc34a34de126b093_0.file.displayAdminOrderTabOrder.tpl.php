<?php
/* Smarty version 4.3.4, created on 2025-06-28 05:54:22
  from '/home/u1573007/public_html/modules/paypal/views/templates/hook/displayAdminOrderTabOrder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685f211ef3c820_34507862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7be1fa971941eadc878cca33dc34a34de126b093' => 
    array (
      0 => '/home/u1573007/public_html/modules/paypal/views/templates/hook/displayAdminOrderTabOrder.tpl',
      1 => 1736908582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685f211ef3c820_34507862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u1573007/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>


<li class="nav-item">
    <a href="#paypal" class="nav-link" data-toggle="tab" role="tab">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal','mod'=>'paypal'),$_smarty_tpl ) );?>

        <?php if (version_compare($_smarty_tpl->tpl_vars['psVersion']->value,'1.7.7','>=')) {?>
            (<?php if ((isset($_smarty_tpl->tpl_vars['logs']->value))) {
echo smarty_modifier_count($_smarty_tpl->tpl_vars['logs']->value);
} else { ?>0<?php }?>)
        <?php } else { ?>
          <span class="badge"><?php if ((isset($_smarty_tpl->tpl_vars['logs']->value))) {
echo smarty_modifier_count($_smarty_tpl->tpl_vars['logs']->value);
} else { ?>0<?php }?></span>
        <?php }?>
    </a>
</li>
<?php }
}
