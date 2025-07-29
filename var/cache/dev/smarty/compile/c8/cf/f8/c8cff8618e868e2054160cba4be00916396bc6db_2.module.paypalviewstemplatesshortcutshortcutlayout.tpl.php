<?php
/* Smarty version 4.3.4, created on 2025-02-16 12:06:45
  from 'module:paypalviewstemplatesshortcutshortcutlayout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b17265ace287_22639533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8cff8618e868e2054160cba4be00916396bc6db' => 
    array (
      0 => 'module:paypalviewstemplatesshortcutshortcutlayout.tpl',
      1 => 1736908582,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b17265ace287_22639533 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin /home/u1573007/public_html/modules/paypal/views/templates/shortcut/shortcut-layout.tpl -->
<!-- Start shortcut. Module Paypal -->
<?php ob_start();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['psPaypalDir']->value)."/views/templates/_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('javascriptBlock', ob_get_clean());
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20986896967b17265ac9e37_94494416', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152909108667b17265acb9b4_58563977', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62953681767b17265acc606_23454642', 'js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107476772467b17265acd1c1_51087375', 'init-button');
?>

<!-- End shortcut. Module Paypal -->



<!-- end /home/u1573007/public_html/modules/paypal/views/templates/shortcut/shortcut-layout.tpl --><?php }
/* {block 'head'} */
class Block_20986896967b17265ac9e37_94494416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_20986896967b17265ac9e37_94494416',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['javascriptBlock']->value;?>

<?php
}
}
/* {/block 'head'} */
/* {block 'content'} */
class Block_152909108667b17265acb9b4_58563977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_152909108667b17265acb9b4_58563977',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_62953681767b17265acc606_23454642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_62953681767b17265acc606_23454642',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
/* {block 'init-button'} */
class Block_107476772467b17265acd1c1_51087375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'init-button' => 
  array (
    0 => 'Block_107476772467b17265acd1c1_51087375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
      function waitPaypalIsLoaded() {
          if (typeof totPaypalSdkButtons === 'undefined' || typeof Shortcut === 'undefined') {
              setTimeout(waitPaypalIsLoaded, 200);
              return;
          }

          Shortcut.init();

          if (typeof PAYPAL_MOVE_BUTTON_AT_END != 'undefined') {
            Shortcut.isMoveButtonAtEnd = PAYPAL_MOVE_BUTTON_AT_END;
          }

          Shortcut.initButton();
      }

      waitPaypalIsLoaded();
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'init-button'} */
}
