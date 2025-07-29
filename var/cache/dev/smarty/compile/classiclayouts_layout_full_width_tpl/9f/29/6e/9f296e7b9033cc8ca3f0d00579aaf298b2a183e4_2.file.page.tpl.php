<?php
/* Smarty version 4.3.4, created on 2025-02-16 13:00:08
  from '/home/u1573007/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b17ee8b246f1_08881554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f296e7b9033cc8ca3f0d00579aaf298b2a183e4' => 
    array (
      0 => '/home/u1573007/public_html/themes/classic/templates/page.tpl',
      1 => 1708941642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b17ee8b246f1_08881554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213537076567b17ee8b1ab00_22526704', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_29916265667b17ee8b1bfa9_63869907 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_50905030067b17ee8b1b3f8_05146039 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29916265667b17ee8b1bfa9_63869907', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_154513313767b17ee8b20a92_65743989 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_109308031567b17ee8b21667_98946633 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_188360647067b17ee8b20110_31360737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154513313767b17ee8b20a92_65743989', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109308031567b17ee8b21667_98946633', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_119778107667b17ee8b23100_62098978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_128820295667b17ee8b22904_07477084 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119778107667b17ee8b23100_62098978', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_213537076567b17ee8b1ab00_22526704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_213537076567b17ee8b1ab00_22526704',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_50905030067b17ee8b1b3f8_05146039',
  ),
  'page_title' => 
  array (
    0 => 'Block_29916265667b17ee8b1bfa9_63869907',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_188360647067b17ee8b20110_31360737',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_154513313767b17ee8b20a92_65743989',
  ),
  'page_content' => 
  array (
    0 => 'Block_109308031567b17ee8b21667_98946633',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_128820295667b17ee8b22904_07477084',
  ),
  'page_footer' => 
  array (
    0 => 'Block_119778107667b17ee8b23100_62098978',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50905030067b17ee8b1b3f8_05146039', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_188360647067b17ee8b20110_31360737', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128820295667b17ee8b22904_07477084', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
