<?php
/* Smarty version 4.3.4, created on 2025-06-28 03:24:13
  from '/home/u1573007/public_html/mails/_partials/order_conf_product_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685efdeda23ec6_36363127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73910d2e8e30c62f4220144e87320efa4a266e0b' => 
    array (
      0 => '/home/u1573007/public_html/mails/_partials/order_conf_product_list.tpl',
      1 => 1718342660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685efdeda23ec6_36363127 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
<tr>
	<td style="border:1px solid #D6D4D4;">
		<table class="table">
			<tr>
				<td width="5">&nbsp;</td>
				<td>
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['reference'], ENT_QUOTES, 'UTF-8');?>

					</font>
				</td>
				<td width="5">&nbsp;</td>
			</tr>
		</table>
	</td>
	<td style="border:1px solid #D6D4D4;">
		<table class="table">
			<tr>
				<td width="5">&nbsp;</td>
				<td>
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</strong>
						<?php if (count($_smarty_tpl->tpl_vars['product']->value['customization']) == 1) {?>
							<br>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customization'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
								<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customization']->value['customization_text'], ENT_QUOTES, 'UTF-8');?>

							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>

					</font>
				</td>
				<td width="5">&nbsp;</td>
			</tr>
		</table>
	</td>
	<td style="border:1px solid #D6D4D4;">
		<table class="table">
			<tr>
				<td width="5">&nbsp;</td>
				<td align="right">
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['unit_price'], ENT_QUOTES, 'UTF-8');?>

					</font>
				</td>
				<td width="5">&nbsp;</td>
			</tr>
		</table>
	</td>
	<td style="border:1px solid #D6D4D4;">
		<table class="table">
			<tr>
				<td width="5">&nbsp;</td>
				<td align="right">
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>

					</font>
				</td>
				<td width="5">&nbsp;</td>
			</tr>
		</table>
	</td>
	<td style="border:1px solid #D6D4D4;">
		<table class="table">
			<tr>
				<td width="5">&nbsp;</td>
				<td align="right">
					<font size="2" face="Open-sans, sans-serif" color="#555454">
						<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

					</font>
				</td>
				<td width="5">&nbsp;</td>
			</tr>
		</table>
	</td>
</tr>
  <?php if (count($_smarty_tpl->tpl_vars['product']->value['customization']) > 1) {?>
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customization'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
  		<tr>
  		<td colspan="3" style="border:1px solid #D6D4D4;">
  			<table class="table">
  				<tr>
  					<td width="5">&nbsp;</td>
  					<td>
  						<font size="2" face="Open-sans, sans-serif" color="#555454">
  							<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customization']->value['customization_text'], ENT_QUOTES, 'UTF-8');?>

  						</font>
  					</td>
  					<td width="5">&nbsp;</td>
  				</tr>
  			</table>
  		</td>
  		<td style="border:1px solid #D6D4D4;">
  			<table class="table">
  				<tr>
  					<td width="5">&nbsp;</td>
  					<td align="right">
  						<font size="2" face="Open-sans, sans-serif" color="#555454">
  							<?php if (count($_smarty_tpl->tpl_vars['product']->value['customization']) > 1) {?>
  								<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customization']->value['customization_quantity'], ENT_QUOTES, 'UTF-8');?>

  							<?php }?>
  						</font>
  					</td>
  					<td width="5">&nbsp;</td>
  				</tr>
  			</table>
  		</td>
  		<td style="border:1px solid #D6D4D4;"></td>
  	</tr>
  	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
