<?php
/* Smarty version 4.3.4, created on 2025-02-16 13:00:08
  from '/home/u1573007/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b17ee8b13822_69560741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b52fb7784d329cf93db53ef696fb278d81994c1f' => 
    array (
      0 => '/home/u1573007/public_html/themes/classic/templates/index.tpl',
      1 => 1708941642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b17ee8b13822_69560741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164243770767b17ee8b0ee58_76850426', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_140245667b17ee8b0fbc1_02910037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_134562362067b17ee8b114d4_96454515 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_170989409967b17ee8b10c28_45712916 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134562362067b17ee8b114d4_96454515', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_164243770767b17ee8b0ee58_76850426 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_164243770767b17ee8b0ee58_76850426',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_140245667b17ee8b0fbc1_02910037',
  ),
  'page_content' => 
  array (
    0 => 'Block_170989409967b17ee8b10c28_45712916',
  ),
  'hook_home' => 
  array (
    0 => 'Block_134562362067b17ee8b114d4_96454515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140245667b17ee8b0fbc1_02910037', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170989409967b17ee8b10c28_45712916', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
