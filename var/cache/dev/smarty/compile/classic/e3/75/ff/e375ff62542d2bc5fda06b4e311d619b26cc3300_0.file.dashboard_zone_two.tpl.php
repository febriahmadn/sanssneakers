<?php
/* Smarty version 4.3.4, created on 2025-02-16 12:06:26
  from '/home/u1573007/public_html/modules/dashgoals/views/templates/hook/dashboard_zone_two.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b17252487d41_75221298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e375ff62542d2bc5fda06b4e311d619b26cc3300' => 
    array (
      0 => '/home/u1573007/public_html/modules/dashgoals/views/templates/hook/dashboard_zone_two.tpl',
      1 => 1679480172,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./config.tpl' => 1,
  ),
),false)) {
function content_67b17252487d41_75221298 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="clearfix"></div>
<?php echo '<script'; ?>
>
	var currency_format = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value->format ));?>
;
	var currency_sign = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value->sign ));?>
';
	var currency_blank = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['currency']->value->blank ));?>
;
	var priceDisplayPrecision = 0;
	var dashgoals_year = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['goals_year']->value ));?>
;
	var dashgoals_ajax_link = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['dashgoals_ajax_link']->value ));?>
';
<?php echo '</script'; ?>
>

<section id="dashgoals" class="panel widget">
	<header class="panel-heading">
		<i class="icon-bar-chart"></i>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forecast','d'=>'Modules.Dashgoals.Admin'),$_smarty_tpl ) );?>

		<span id="dashgoals_title" class="badge"><?php echo $_smarty_tpl->tpl_vars['goals_year']->value;?>
</span>
		<span class="btn-group">
			<a href="javascript:void(0);" onclick="dashgoals_changeYear('backward');" class="btn btn-default btn-xs"><i class="icon-backward"></i></a>
			<a href="javascript:void(0);" onclick="dashgoals_changeYear('forward');" class="btn btn-default btn-xs"><i class="icon-forward"></i></a>
		</span>

		<span class="panel-heading-action">
			<a class="list-toolbar-btn" href="javascript:void(0);" onclick="toggleDashConfig('dashgoals');" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure','d'=>'Admin.Global'),$_smarty_tpl ) );?>
">
				<i class="process-icon-configure"></i>
			</a>
			<a class="list-toolbar-btn" href="javascript:void(0);" onclick="refreshDashboard('dashgoals');" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
">
				<i class="process-icon-refresh"></i>
			</a>
		</span>
	</header>
	<?php $_smarty_tpl->_subTemplateRender('file:./config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<section class="loading">
		<div class="btn-group" data-toggle="buttons">
			<label class="btn btn-default">
				<input type="radio" name="options" onchange="selectDashgoalsChart('traffic');"/><i class="icon-circle" style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value[0];?>
"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Traffic','d'=>'Modules.Dashgoals.Admin'),$_smarty_tpl ) );?>

			</label>
			<label class="btn btn-default">
				<input type="radio" name="options" onchange="selectDashgoalsChart('conversion');"/><i class="icon-circle" style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value[1];?>
"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Conversion','d'=>'Modules.Dashgoals.Admin'),$_smarty_tpl ) );?>

			</label>
			<label class="btn btn-default">
				<input type="radio" name="options" onchange="selectDashgoalsChart('avg_cart_value');"/><i class="icon-circle" style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value[2];?>
"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Average Cart Value','d'=>'Modules.Dashgoals.Admin'),$_smarty_tpl ) );?>

			</label>
			<label class="btn btn-default active">
				<input type="radio" name="options" onchange="selectDashgoalsChart('sales');"/><i class="icon-circle" style="color:<?php echo $_smarty_tpl->tpl_vars['colors']->value[3];?>
"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sales','d'=>'Admin.Global'),$_smarty_tpl ) );?>

			</label>
		</div>
		<div id="dash_goals_chart1" class="chart with-transitions">
			<svg></svg>
		</div>
	</section>
</section>
<?php }
}
