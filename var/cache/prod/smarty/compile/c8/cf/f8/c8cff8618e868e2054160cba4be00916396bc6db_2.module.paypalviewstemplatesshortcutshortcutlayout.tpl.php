<?php
/* Smarty version 4.3.4, created on 2025-03-14 22:26:22
  from 'module:paypalviewstemplatesshortcutshortcutlayout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d44a9e691ab6_35650385',
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
function content_67d44a9e691ab6_35650385 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!-- Start shortcut. Module Paypal -->
<?php ob_start();
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['psPaypalDir']->value)."/views/templates/_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->assign('javascriptBlock', ob_get_clean());
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190145883167d44a9e68db67_37859650', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94092444667d44a9e68f537_90088362', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117939469367d44a9e6900c5_68635589', 'js');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186785755767d44a9e690bd9_76360367', 'init-button');
?>

<!-- End shortcut. Module Paypal -->



<?php }
/* {block 'head'} */
class Block_190145883167d44a9e68db67_37859650 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_190145883167d44a9e68db67_37859650',
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
class Block_94092444667d44a9e68f537_90088362 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_94092444667d44a9e68f537_90088362',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
/* {block 'js'} */
class Block_117939469367d44a9e6900c5_68635589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_117939469367d44a9e6900c5_68635589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
/* {block 'init-button'} */
class Block_186785755767d44a9e690bd9_76360367 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'init-button' => 
  array (
    0 => 'Block_186785755767d44a9e690bd9_76360367',
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
