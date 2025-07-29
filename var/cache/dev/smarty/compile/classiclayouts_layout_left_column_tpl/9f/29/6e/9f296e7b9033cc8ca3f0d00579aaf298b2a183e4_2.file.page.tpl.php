<?php
/* Smarty version 4.3.4, created on 2025-02-16 19:53:28
  from '/home/u1573007/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b1dfc8c7e5c6_05679220',
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
function content_67b1dfc8c7e5c6_05679220 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148030031067b1dfc8c74e62_46498116', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_62118654367b1dfc8c762f4_66787126 extends Smarty_Internal_Block
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
class Block_32070980267b1dfc8c75767_09292843 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62118654367b1dfc8c762f4_66787126', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_40596286567b1dfc8c7a947_68511765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_169321169167b1dfc8c7b517_91086279 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_101709707767b1dfc8c7a0c6_85943433 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40596286567b1dfc8c7a947_68511765', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169321169167b1dfc8c7b517_91086279', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_197554214667b1dfc8c7cf70_60499707 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_154073012367b1dfc8c7c758_99450198 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197554214667b1dfc8c7cf70_60499707', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_148030031067b1dfc8c74e62_46498116 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_148030031067b1dfc8c74e62_46498116',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_32070980267b1dfc8c75767_09292843',
  ),
  'page_title' => 
  array (
    0 => 'Block_62118654367b1dfc8c762f4_66787126',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_101709707767b1dfc8c7a0c6_85943433',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_40596286567b1dfc8c7a947_68511765',
  ),
  'page_content' => 
  array (
    0 => 'Block_169321169167b1dfc8c7b517_91086279',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_154073012367b1dfc8c7c758_99450198',
  ),
  'page_footer' => 
  array (
    0 => 'Block_197554214667b1dfc8c7cf70_60499707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32070980267b1dfc8c75767_09292843', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101709707767b1dfc8c7a0c6_85943433', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154073012367b1dfc8c7c758_99450198', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
