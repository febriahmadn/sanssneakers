<?php
/* Smarty version 4.3.4, created on 2025-03-16 08:09:19
  from '/home/u1573007/public_html/themes/classic/templates/cms/sitemap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d624bfa75cf4_15875854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25ad32da3b35a8413bde9823f4e2192c0001a1f7' => 
    array (
      0 => '/home/u1573007/public_html/themes/classic/templates/cms/sitemap.tpl',
      1 => 1708941642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:cms/_partials/sitemap-nested-list.tpl' => 1,
  ),
),false)) {
function content_67d624bfa75cf4_15875854 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12311769367d624bfa5eee6_69018997', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164305980167d624bfa63213_44127485', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_12311769367d624bfa5eee6_69018997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_12311769367d624bfa5eee6_69018997',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <span class="sitemap-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sitemap','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content_container'} */
class Block_164305980167d624bfa63213_44127485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_164305980167d624bfa63213_44127485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="container-fluid">
    <div class="row sitemap">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sitemapUrls']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
        <div class="col-md-3">
          <h2><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h2>
          <?php $_smarty_tpl->_subTemplateRender('file:cms/_partials/sitemap-nested-list.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('links'=>$_smarty_tpl->tpl_vars['group']->value['links']), 0, true);
?>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php
}
}
/* {/block 'page_content_container'} */
}
