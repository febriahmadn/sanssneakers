<?php
/* Smarty version 4.3.4, created on 2025-03-14 22:25:18
  from '/home/u1573007/public_html/adminsite/themes/default/template/layout-ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d44a5eb663f2_02678147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df9f289813d273ed2183ed83ae5c0f21d4af0cb3' => 
    array (
      0 => '/home/u1573007/public_html/adminsite/themes/default/template/layout-ajax.tpl',
      1 => 1718342660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d44a5eb663f2_02678147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u1573007/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
if ((isset($_smarty_tpl->tpl_vars['json']->value))) {?>
{<?php if ((isset($_smarty_tpl->tpl_vars['status']->value)) && is_string($_smarty_tpl->tpl_vars['status']->value) && trim($_smarty_tpl->tpl_vars['status']->value) != '') {
$_smarty_tpl->_assignInScope('hasresult', 'ok');?>"status" : "<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
"<?php }
if (!empty($_smarty_tpl->tpl_vars['confirmations']->value)) {
if ($_smarty_tpl->tpl_vars['hasresult']->value == 'ok') {?>,<?php }
$_smarty_tpl->_assignInScope('hasresult', 'ok');?>"confirmations" : <?php echo $_smarty_tpl->tpl_vars['confirmations']->value;
}
if (!empty($_smarty_tpl->tpl_vars['informations']->value)) {
if ($_smarty_tpl->tpl_vars['hasresult']->value == 'ok') {?>,<?php }
$_smarty_tpl->_assignInScope('hasresult', 'ok');?>"informations" : <?php echo $_smarty_tpl->tpl_vars['informations']->value;
}
if (!empty($_smarty_tpl->tpl_vars['errors']->value)) {
if ($_smarty_tpl->tpl_vars['hasresult']->value == 'ok') {?>,<?php }
$_smarty_tpl->_assignInScope('hasresult', 'ok');?>"error" : <?php echo $_smarty_tpl->tpl_vars['errors']->value;
}
if (!empty($_smarty_tpl->tpl_vars['warnings']->value)) {
if ($_smarty_tpl->tpl_vars['hasresult']->value == 'ok') {?>,<?php }
$_smarty_tpl->_assignInScope('hasresult', 'ok');?>"warnings" : <?php echo $_smarty_tpl->tpl_vars['warnings']->value;
}
if ($_smarty_tpl->tpl_vars['hasresult']->value == 'ok') {?>,<?php }
$_smarty_tpl->_assignInScope('hasresult', 'ok');?>"content" : <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
}
<?php } else { ?>
	<?php if ((isset($_smarty_tpl->tpl_vars['conf']->value))) {?>
		<div class="alert alert-success">
			<?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

		</div>
	<?php }?>

	<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php if (count($_smarty_tpl->tpl_vars['errors']->value) == 1) {?>
				<?php echo $_smarty_tpl->tpl_vars['errors']->value[0];?>

			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d errors.','sprintf'=>array(smarty_modifier_count($_smarty_tpl->tpl_vars['errors']->value)),'d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>

				<br/>
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			<?php }?>
		</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['informations']->value)) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
		<div class="alert alert-info" style="display:block;">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
				<?php echo $_smarty_tpl->tpl_vars['info']->value;?>
<br/>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['confirmations']->value)) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
		<div class="alert alert-success" style="display:block;">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'confirm');
$_smarty_tpl->tpl_vars['confirm']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['confirm']->value) {
$_smarty_tpl->tpl_vars['confirm']->do_else = false;
?>
				<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
<br />
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	<?php }?>

	<?php if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php if (count($_smarty_tpl->tpl_vars['warnings']->value) > 1) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d warnings.','sprintf'=>count($_smarty_tpl->tpl_vars['warnings']->value),'d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>

				<span style="margin-left:20px;" id="labelSeeMore">
					<a id="linkSeeMore" href="#" style="text-decoration:underline"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See more','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</a>
					<a id="linkHide" href="#" style="text-decoration:underline;display:none"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide warning','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</a>
				</span>
			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d warnings.','sprintf'=>count($_smarty_tpl->tpl_vars['warnings']->value),'d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>

			<?php }?>
			<ul style="display:<?php if (count($_smarty_tpl->tpl_vars['warnings']->value) > 1) {?>none<?php } else { ?>block<?php }?>;" id="seeMore">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warnings']->value, 'warning');
$_smarty_tpl->tpl_vars['warning']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->do_else = false;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

<?php }
}
}
