<?php
/* Smarty version 4.3.4, created on 2025-02-16 18:36:37
  from '/home/u1573007/public_html/adminsite/themes/default/template/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b1cdc5315496_06943623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d371a7d8caaa2a31eabe6da7ca61b857559ba91' => 
    array (
      0 => '/home/u1573007/public_html/adminsite/themes/default/template/error.tpl',
      1 => 1718342660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b1cdc5315496_06943623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u1573007/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
if ((isset($_smarty_tpl->tpl_vars['php_errors']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['php_errors']->value)) {?>
<div class="bootstrap">
	<div id="error-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="alert alert-danger clearfix">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['php_errors']->value, 'php_error');
$_smarty_tpl->tpl_vars['php_error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['php_error']->value) {
$_smarty_tpl->tpl_vars['php_error']->do_else = false;
?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s on line %2$s in file %3$s','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['php_error']->value['type'] )),call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['php_error']->value['errline'] )),call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['php_error']->value['errfile'] ))),'d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>
<br />
					[<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['php_error']->value['errno'] ));?>
] <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['php_error']->value['errstr'] ));?>
<br /><br />
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="icon-remove"></i> Close</button>
			</div>
		</div>
	</div>
</div>
<?php }
}
}
