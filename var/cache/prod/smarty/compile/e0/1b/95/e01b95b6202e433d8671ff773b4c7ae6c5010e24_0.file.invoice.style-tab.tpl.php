<?php
/* Smarty version 4.3.4, created on 2025-06-28 06:01:29
  from '/home/u1573007/public_html/pdf/invoice.style-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_685f22c9845128_04233503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e01b95b6202e433d8671ff773b4c7ae6c5010e24' => 
    array (
      0 => '/home/u1573007/public_html/pdf/invoice.style-tab.tpl',
      1 => 1718342660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685f22c9845128_04233503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209757070685f22c983ad87_83749191', "variables");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1998739586685f22c983fe86_72670154', "styles");
?>

<?php }
/* {block "variables"} */
class Block_209757070685f22c983ad87_83749191 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'variables' => 
  array (
    0 => 'Block_209757070685f22c983ad87_83749191',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_assignInScope('color_header', "#F0F0F0");?>
	<?php $_smarty_tpl->_assignInScope('color_border', "#000000");?>
	<?php $_smarty_tpl->_assignInScope('color_border_lighter', "#CCCCCC");?>
	<?php $_smarty_tpl->_assignInScope('color_line_even', "#FFFFFF");?>
	<?php $_smarty_tpl->_assignInScope('color_line_odd', "#F9F9F9");?>
	<?php $_smarty_tpl->_assignInScope('font_size_text', "9pt");?>
	<?php $_smarty_tpl->_assignInScope('font_size_header', "9pt");?>
	<?php $_smarty_tpl->_assignInScope('font_size_product', "9pt");?>
	<?php $_smarty_tpl->_assignInScope('height_header', "20px");?>
	<?php $_smarty_tpl->_assignInScope('table_padding', "4px");
}
}
/* {/block "variables"} */
/* {block "styles"} */
class Block_1998739586685f22c983fe86_72670154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1998739586685f22c983fe86_72670154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<style>
		table, th, td {
			margin: 0!important;
			padding: 0!important;
			vertical-align: middle;
			font-size: <?php echo $_smarty_tpl->tpl_vars['font_size_text']->value;?>
;
			white-space: nowrap;
		}

		table.product {
			border: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
			border-collapse: collapse;
		}

		table#addresses-tab tr td {
			font-size: large;
		}

		table#summary-tab {
			padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
			border: 1pt solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
		}
		table#total-tab {
			padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
			border: 1pt solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
		}
		table#note-tab {
			padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
			border: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
		}
		table#note-tab td.note{
			word-wrap: break-word;
		}
		table#tax-tab {
			padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
			border: 1pt solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
		}
		table#payment-tab,
		table#shipping-tab {
			padding: <?php echo $_smarty_tpl->tpl_vars['table_padding']->value;?>
;
			border: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
		}

		th.product {
			border-bottom: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
		}

		tr.discount th.header {
			border-top: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border']->value;?>
;
		}

		tr.product td {
			border-bottom: 1px solid <?php echo $_smarty_tpl->tpl_vars['color_border_lighter']->value;?>
;
		}

		tr.color_line_even {
			background-color: <?php echo $_smarty_tpl->tpl_vars['color_line_even']->value;?>
;
		}

		tr.color_line_odd {
			background-color: <?php echo $_smarty_tpl->tpl_vars['color_line_odd']->value;?>
;
		}

		tr.customization_data td {
		}

		td.product {
			vertical-align: middle;
			font-size: <?php echo $_smarty_tpl->tpl_vars['font_size_product']->value;?>
;
		}

		th.header {
			font-size: <?php echo $_smarty_tpl->tpl_vars['font_size_header']->value;?>
;
			height: <?php echo $_smarty_tpl->tpl_vars['height_header']->value;?>
;
			background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;
			vertical-align: middle;
			text-align: center;
			font-weight: bold;
		}

		th.header-right {
			font-size: <?php echo $_smarty_tpl->tpl_vars['font_size_header']->value;?>
;
			height: <?php echo $_smarty_tpl->tpl_vars['height_header']->value;?>
;
			background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;
			vertical-align: middle;
			text-align: right;
			font-weight: bold;
		}

		th.payment,
		th.shipping {
			background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;
			vertical-align: middle;
			font-weight: bold;
		}

		th.tva {
			background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;
			vertical-align: middle;
			font-weight: bold;
		}

		tr.separator td {
			border-top: 1px solid #000000;
		}

		.left {
			text-align: left;
		}

		.fright {
			float: right;
		}

		.right {
			text-align: right;
		}

		.center {
			text-align: center;
		}

		.bold {
			font-weight: bold;
		}

		.border {
			border: 1px solid black;
		}

		.no_top_border {
			border-top:hidden;
			border-bottom:1px solid black;
			border-left:1px solid black;
			border-right:1px solid black;
		}

		.grey {
			background-color: <?php echo $_smarty_tpl->tpl_vars['color_header']->value;?>
;

		}

		/* This is used for the border size */
		.white {
			background-color: #FFFFFF;
		}

		.big,
		tr.big td{
			font-size: 110%;
		}

		.small, table.small th, table.small td {
			font-size:small;
		}
	</style>
<?php
}
}
/* {/block "styles"} */
}
