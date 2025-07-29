<?php
/* Smarty version 4.3.4, created on 2025-04-28 18:06:21
  from '/home/u1573007/public_html/themes/classic/templates/checkout/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_680f612d6e54c5_03566882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e4702793217a43dab9e3dc300b6e7d963a9b530' => 
    array (
      0 => '/home/u1573007/public_html/themes/classic/templates/checkout/_partials/footer.tpl',
      1 => 1708941642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680f612d6e54c5_03566882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="modal fade js-checkout-modal" id="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="js-modal-content"></div>
    </div>
  </div>
</div>

<div class="text-sm-center">
  <?php if ($_smarty_tpl->tpl_vars['tos_cms']->value != false) {?>
    <span class="d-block js-terms"><?php echo $_smarty_tpl->tpl_vars['tos_cms']->value;?>
</span>
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1400078416680f612d6e3767_86503406', 'copyright_link');
?>

</div>
<?php }
/* {block 'copyright_link'} */
class Block_1400078416680f612d6e3767_86503406 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_1400078416680f612d6e3767_86503406',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

  <?php
}
}
/* {/block 'copyright_link'} */
}
