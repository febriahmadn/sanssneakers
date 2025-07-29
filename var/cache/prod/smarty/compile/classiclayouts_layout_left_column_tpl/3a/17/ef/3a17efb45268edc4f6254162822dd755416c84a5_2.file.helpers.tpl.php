<?php
/* Smarty version 4.3.4, created on 2025-03-14 22:25:30
  from '/home/u1573007/public_html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d44a6aa4b807_59531405',
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
function content_67d44a6aa4b807_59531405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/u1573007/public_html/var/cache/prod/smarty/compile/classiclayouts_layout_left_column_tpl/3a/17/ef/3a17efb45268edc4f6254162822dd755416c84a5_2.file.helpers.tpl.php',
    'uid' => '3a17efb45268edc4f6254162822dd755416c84a5',
    'call_name' => 'smarty_template_function_renderLogo_103337312367d44a6aa41ae3_71333589',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_103337312367d44a6aa41ae3_71333589 */
if (!function_exists('smarty_template_function_renderLogo_103337312367d44a6aa41ae3_71333589')) {
function smarty_template_function_renderLogo_103337312367d44a6aa41ae3_71333589(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_103337312367d44a6aa41ae3_71333589 */
}
