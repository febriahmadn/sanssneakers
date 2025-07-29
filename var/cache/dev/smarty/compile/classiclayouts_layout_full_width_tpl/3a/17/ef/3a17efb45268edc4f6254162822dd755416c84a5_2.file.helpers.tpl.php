<?php
/* Smarty version 4.3.4, created on 2025-02-16 12:06:45
  from '/home/u1573007/public_html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b1726574c4a1_79005290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a17efb45268edc4f6254162822dd755416c84a5' => 
    array (
      0 => '/home/u1573007/public_html/themes/classic/templates/_partials/helpers.tpl',
      1 => 1708941642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b1726574c4a1_79005290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/u1573007/public_html/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/3a/17/ef/3a17efb45268edc4f6254162822dd755416c84a5_2.file.helpers.tpl.php',
    'uid' => '3a17efb45268edc4f6254162822dd755416c84a5',
    'call_name' => 'smarty_template_function_renderLogo_8159047367b17265743dc2_36587699',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_8159047367b17265743dc2_36587699 */
if (!function_exists('smarty_template_function_renderLogo_8159047367b17265743dc2_36587699')) {
function smarty_template_function_renderLogo_8159047367b17265743dc2_36587699(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_8159047367b17265743dc2_36587699 */
}
