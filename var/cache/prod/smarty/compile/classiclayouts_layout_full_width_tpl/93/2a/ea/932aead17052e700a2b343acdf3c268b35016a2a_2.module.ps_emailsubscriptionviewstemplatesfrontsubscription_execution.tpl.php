<?php
/* Smarty version 4.3.4, created on 2025-05-23 07:08:56
  from 'module:ps_emailsubscriptionviewstemplatesfrontsubscription_execution.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_682fbc98d7e4f8_70186418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '932aead17052e700a2b343acdf3c268b35016a2a' => 
    array (
      0 => 'module:ps_emailsubscriptionviewstemplatesfrontsubscription_execution.tpl',
      1 => 1709782494,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682fbc98d7e4f8_70186418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_346359490682fbc98d73200_52736980', "page_content");
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "page_content"} */
class Block_346359490682fbc98d73200_52736980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_346359490682fbc98d73200_52736980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter subscription','d'=>'Modules.Emailsubscription.Shop'),$_smarty_tpl ) );?>
</h1>

  <p class="alert <?php if ($_smarty_tpl->tpl_vars['variables']->value['nw_error']) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variables']->value['msg'], ENT_QUOTES, 'UTF-8');?>

  </p>

  <?php if ($_smarty_tpl->tpl_vars['variables']->value['conditions']) {?>
    <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variables']->value['conditions'], ENT_QUOTES, 'UTF-8');?>
</p>
  <?php }?>

<?php
}
}
/* {/block "page_content"} */
}
