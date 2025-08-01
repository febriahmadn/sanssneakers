<?php
/* Smarty version 4.3.4, created on 2025-03-19 18:24:13
  from '/home/u1573007/public_html/adminsite/themes/default/template/helpers/list/list_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67daa95d21e579_11125285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f38e14441141bc1369e97596b97f71d3d705fcde' => 
    array (
      0 => '/home/u1573007/public_html/adminsite/themes/default/template/helpers/list/list_footer.tpl',
      1 => 1718342660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67daa95d21e579_11125285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
</table>
</div>
<div class="row">
	<div class="col-lg-6">
		<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value && $_smarty_tpl->tpl_vars['has_bulk_actions']->value && !$_smarty_tpl->tpl_vars['hide_bulk_actions_btn']->value) {?>
		<div class="btn-group bulk-actions dropup">
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" <?php if ($_smarty_tpl->tpl_vars['table']->value) {?>id="bulk_action_menu_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
"<?php }?>>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bulk actions','d'=>'Admin.Global'),$_smarty_tpl ) );?>
 <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li>
					<a href="#" onclick="javascript:checkDelBoxes($(this).closest('form').get(0), '<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Box[]', true);return false;">
						<i class="icon-check-sign"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select all'),$_smarty_tpl ) );?>

					</a>
				</li>
				<li>
					<a href="#" onclick="javascript:checkDelBoxes($(this).closest('form').get(0), '<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
Box[]', false);return false;">
						<i class="icon-check-empty"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unselect all'),$_smarty_tpl ) );?>

					</a>
				</li>
				<li class="divider"></li>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bulk_actions']->value, 'params', false, 'key');
$_smarty_tpl->tpl_vars['params']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->do_else = false;
?>
					<li<?php if ($_smarty_tpl->tpl_vars['params']->value['text'] == 'divider') {?> class="divider"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['params']->value['text'] != 'divider') {?>
						<a href="#" onclick="<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['confirm']))) {?>if (confirm('<?php echo $_smarty_tpl->tpl_vars['params']->value['confirm'];?>
'))<?php }?>sendBulkAction($(this).closest('form').get(0), 'submitBulk<?php echo $_smarty_tpl->tpl_vars['key']->value;
echo $_smarty_tpl->tpl_vars['table']->value;?>
');">
							<?php if ((isset($_smarty_tpl->tpl_vars['params']->value['icon']))) {?><i class="<?php echo $_smarty_tpl->tpl_vars['params']->value['icon'];?>
"></i><?php }?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['params']->value['text'];?>

						</a>
						<?php }?>
					</li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
		</div>
		<?php }?>
	</div>
	<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value && $_smarty_tpl->tpl_vars['list_total']->value > $_smarty_tpl->tpl_vars['pagination']->value[0]) {?>
	<div class="col-lg-6">
				<div class="pagination">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display'),$_smarty_tpl ) );?>

			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<?php echo $_smarty_tpl->tpl_vars['selected_pagination']->value;?>

				<i class="icon-caret-down"></i>
			</button>
			<ul class="dropdown-menu">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
				<li>
					<a href="javascript:void(0);" class="pagination-items-page" data-items="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value ));?>
" data-list-id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
				</li>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</ul>
			/ <?php echo $_smarty_tpl->tpl_vars['list_total']->value;?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'result(s)'),$_smarty_tpl ) );?>

			<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
-pagination-items-page" name="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
_pagination" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['selected_pagination']->value ));?>
" />
		</div>
		<?php echo '<script'; ?>
 type="text/javascript">
			$('.pagination-items-page').on('click',function(e){
				e.preventDefault();
				$('#'+$(this).data("list-id")+'-pagination-items-page').val($(this).data("items")).closest("form").submit();
			});
		<?php echo '</script'; ?>
>
		<ul class="pagination pull-right">
			<li <?php if ($_smarty_tpl->tpl_vars['page']->value <= 1) {?>class="disabled"<?php }?>>
				<a href="javascript:void(0);" class="pagination-link" data-page="1" data-list-id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
					<i class="icon-double-angle-left"></i>
				</a>
			</li>
			<li <?php if ($_smarty_tpl->tpl_vars['page']->value <= 1) {?>class="disabled"<?php }?>>
				<a href="javascript:void(0);" class="pagination-link" data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
" data-list-id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
					<i class="icon-angle-left"></i>
				</a>
			</li>
			<?php $_smarty_tpl->_assignInScope('p', 0);?>
			<?php
 while ($_smarty_tpl->tpl_vars['p']->value++ < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
				<?php if ($_smarty_tpl->tpl_vars['p']->value < $_smarty_tpl->tpl_vars['page']->value-2) {?>
					<li class="disabled">
						<a href="javascript:void(0);">&hellip;</a>
					</li>
					<?php $_smarty_tpl->_assignInScope('p', $_smarty_tpl->tpl_vars['page']->value-3);?>
				<?php } elseif ($_smarty_tpl->tpl_vars['p']->value > $_smarty_tpl->tpl_vars['page']->value+2) {?>
					<li class="disabled">
						<a href="javascript:void(0);">&hellip;</a>
					</li>
					<?php $_smarty_tpl->_assignInScope('p', $_smarty_tpl->tpl_vars['total_pages']->value);?>
				<?php } else { ?>
					<li <?php if ($_smarty_tpl->tpl_vars['p']->value == $_smarty_tpl->tpl_vars['page']->value) {?>class="active"<?php }?>>
						<a href="javascript:void(0);" class="pagination-link" data-page="<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
" data-list-id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a>
					</li>
				<?php }?>
			<?php }?>

			<li <?php if ($_smarty_tpl->tpl_vars['page']->value >= $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="disabled"<?php }?>>
				<a href="javascript:void(0);" class="pagination-link" data-page="<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
" data-list-id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
					<i class="icon-angle-right"></i>
				</a>
			</li>
			<li <?php if ($_smarty_tpl->tpl_vars['page']->value >= $_smarty_tpl->tpl_vars['total_pages']->value) {?>class="disabled"<?php }?>>
				<a href="javascript:void(0);" class="pagination-link" data-page="<?php echo $_smarty_tpl->tpl_vars['total_pages']->value;?>
" data-list-id="<?php echo $_smarty_tpl->tpl_vars['list_id']->value;?>
">
					<i class="icon-double-angle-right"></i>
				</a>
			</li>
		</ul>
		<?php echo '<script'; ?>
 type="text/javascript">
			$('.pagination-link').on('click',function(e){
				e.preventDefault();

				if (!$(this).parent().hasClass('disabled'))
					$('#submitFilter'+$(this).data("list-id")).val($(this).data("page")).closest("form").submit();
			});
		<?php echo '</script'; ?>
>
	</div>
	<?php }?>
</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203525170167daa95d1f9e33_70731890', "footer");
?>

<?php if (!$_smarty_tpl->tpl_vars['simple_header']->value) {?>
		<input type="hidden" name="token" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
" />
	</div>
<?php } else { ?>
	</div>
<?php }?>

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminListAfter'),$_smarty_tpl ) );?>

<?php if ((isset($_smarty_tpl->tpl_vars['name_controller']->value))) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_smarty_tpl->tpl_vars['name_controller']->value ));?>
ListAfter<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php } elseif ((isset($_smarty_tpl->tpl_vars['controller_name']->value))) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_smarty_tpl->tpl_vars['controller_name']->value ));?>
ListAfter<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php } elseif ((isset($_GET['controller']))) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'hookName', 'hookName', null);?>display<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'htmlentities' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'ucfirst' ][ 0 ], array( $_GET['controller'] )) ));?>
ListAfter<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl ) );?>

<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166141840967daa95d21b368_10913618', "endForm");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_164893813567daa95d21c4a3_89084725', "after");
?>

<?php }
/* {block "footer"} */
class Block_203525170167daa95d1f9e33_70731890 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_203525170167daa95d1f9e33_70731890',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['toolbar_btn']->value, 'btn', false, 'k');
$_smarty_tpl->tpl_vars['btn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['btn']->value) {
$_smarty_tpl->tpl_vars['btn']->do_else = false;
?>
	<?php if ($_smarty_tpl->tpl_vars['k']->value == 'back') {?>
		<?php $_smarty_tpl->_assignInScope('back_button', $_smarty_tpl->tpl_vars['btn']->value);?>
		<?php break 1;?>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ((isset($_smarty_tpl->tpl_vars['back_button']->value))) {?>
<div class="panel-footer">
	<a id="desc-<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
-<?php if ((isset($_smarty_tpl->tpl_vars['back_button']->value['imgclass']))) {
echo $_smarty_tpl->tpl_vars['back_button']->value['imgclass'];
} else {
echo $_smarty_tpl->tpl_vars['k']->value;
}?>" class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['back_button']->value['target'])) && $_smarty_tpl->tpl_vars['back_button']->value['target']) {?> _blank<?php }?>"<?php if ((isset($_smarty_tpl->tpl_vars['back_button']->value['href']))) {?> href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['back_button']->value['href'],'html','UTF-8' ));?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['back_button']->value['js'])) && $_smarty_tpl->tpl_vars['back_button']->value['js']) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['back_button']->value['js'];?>
"<?php }?>>
		<i class="process-icon-back <?php if ((isset($_smarty_tpl->tpl_vars['back_button']->value['class']))) {
echo $_smarty_tpl->tpl_vars['back_button']->value['class'];
}?>" ></i> <span <?php if ((isset($_smarty_tpl->tpl_vars['back_button']->value['force_desc'])) && $_smarty_tpl->tpl_vars['back_button']->value['force_desc'] == true) {?> class="locked" <?php }?>><?php echo $_smarty_tpl->tpl_vars['back_button']->value['desc'];?>
</span>
	</a>
</div>
<?php }
}
}
/* {/block "footer"} */
/* {block "endForm"} */
class Block_166141840967daa95d21b368_10913618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'endForm' => 
  array (
    0 => 'Block_166141840967daa95d21b368_10913618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

</form>
<?php
}
}
/* {/block "endForm"} */
/* {block "after"} */
class Block_164893813567daa95d21c4a3_89084725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_164893813567daa95d21c4a3_89084725',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "after"} */
}
