<?php
/* Smarty version 4.3.4, created on 2025-04-28 18:06:21
  from 'module:paypalviewstemplatesshortcutshortcutsignup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_680f612d57e8a8_68236704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75e7fcb5c0548fee281edcee178255fdb41a1b53' => 
    array (
      0 => 'module:paypalviewstemplatesshortcutshortcutsignup.tpl',
      1 => 1736908582,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_680f612d57e8a8_68236704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_729785983680f612d44ff56_55148463', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'module:paypal/views/templates/shortcut/shortcut-cart.tpl');
}
/* {block 'content'} */
class Block_729785983680f612d44ff56_55148463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_729785983680f612d44ff56_55148463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div paypal-shortcut-signup style="display: flex;">
      <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  </div>

  <?php echo '<script'; ?>
>
    document.addEventListener('DOMContentLoaded', function() {
        var shortcut = document.querySelector('[paypal-shortcut-signup]');
        var signupForm = document.querySelector('#checkout-personal-information-step .content');

        signupForm.insertBefore(shortcut, signupForm.childNodes[0]);
    });
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'content'} */
}
