<?php
/* Smarty version 4.3.4, created on 2025-06-28 03:23:11
  from '/home/u1573007/public_html/themes/classic/templates/checkout/_partials/address-selector-block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685efdaf8256a9_24249000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33194a78c36328e6b727725b8d80fb913ba527c7' => 
    array (
      0 => '/home/u1573007/public_html/themes/classic/templates/checkout/_partials/address-selector-block.tpl',
      1 => 1708941642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685efdaf8256a9_24249000 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1172115679685efdaf818a54_89106758', 'address_selector_blocks');
?>

<?php }
/* {block 'address_selector_blocks'} */
class Block_1172115679685efdaf818a54_89106758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'address_selector_blocks' => 
  array (
    0 => 'Block_1172115679685efdaf818a54_89106758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address');
$_smarty_tpl->tpl_vars['address']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->do_else = false;
?>
    <article
      class="js-address-item address-item<?php if ($_smarty_tpl->tpl_vars['address']->value['id'] == $_smarty_tpl->tpl_vars['selected']->value) {?> selected<?php }?>"
      id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classname' ][ 0 ], array( $_smarty_tpl->tpl_vars['name']->value )), ENT_QUOTES, 'UTF-8');?>
-address-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
    >
      <header class="h4">
        <label class="radio-block">
          <span class="custom-radio">
            <input
              type="radio"
              name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
              value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['address']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
              <?php if ($_smarty_tpl->tpl_vars['address']->value['id'] == $_smarty_tpl->tpl_vars['selected']->value) {?>checked<?php }?>
            >
            <span></span>
          </span>
          <span class="address-alias h4"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['address']->value['alias'], ENT_QUOTES, 'UTF-8');?>
</span>
          <div class="address"><?php echo $_smarty_tpl->tpl_vars['address']->value['formatted'];?>
</div>
        </label>
      </header>
      <hr>
      <footer class="address-footer">
        <?php if ($_smarty_tpl->tpl_vars['interactive']->value) {?>
          <a
            class="edit-address text-muted"
            data-link-action="edit-address"
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['address']->value['id'],'editAddress'=>$_smarty_tpl->tpl_vars['type']->value,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl ) );?>
"
          >
            <i class="material-icons edit">&#xE254;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
          <a
            class="delete-address text-muted"
            data-link-action="delete-address"
            href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'order','params'=>array('id_address'=>$_smarty_tpl->tpl_vars['address']->value['id'],'deleteAddress'=>true,'token'=>$_smarty_tpl->tpl_vars['token']->value)),$_smarty_tpl ) );?>
"
          >
            <i class="material-icons delete">&#xE872;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
        <?php }?>
      </footer>
    </article>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php if ($_smarty_tpl->tpl_vars['interactive']->value) {?>
    <p>
      <button class="ps-hidden-by-js form-control-submit center-block" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
    </p>
  <?php }
}
}
/* {/block 'address_selector_blocks'} */
}
