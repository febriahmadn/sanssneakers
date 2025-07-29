<?php
/* Smarty version 4.3.4, created on 2025-07-25 18:24:44
  from '/home/u1573007/public_html/adminsite/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6883697c9b1ad5_75191916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd7cc98c400da6a11d6e300975ebcc9b6586d5aa' => 
    array (
      0 => '/home/u1573007/public_html/adminsite/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl',
      1 => 1718342660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6883697c9b1ad5_75191916 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
