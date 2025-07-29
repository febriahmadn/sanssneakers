<?php
/* Smarty version 4.3.4, created on 2025-03-14 23:05:00
  from '/home/u1573007/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d453ac64fa88_64827349',
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
function content_67d453ac64fa88_64827349 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203120444467d453ac64d485_70571630', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_34597419067d453ac64dba6_82352232 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_93513566867d453ac64e8b8_46034494 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_44413814367d453ac64e466_82050329 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93513566867d453ac64e8b8_46034494', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_203120444467d453ac64d485_70571630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_203120444467d453ac64d485_70571630',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_34597419067d453ac64dba6_82352232',
  ),
  'page_content' => 
  array (
    0 => 'Block_44413814367d453ac64e466_82050329',
  ),
  'hook_home' => 
  array (
    0 => 'Block_93513566867d453ac64e8b8_46034494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34597419067d453ac64dba6_82352232', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44413814367d453ac64e466_82050329', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
