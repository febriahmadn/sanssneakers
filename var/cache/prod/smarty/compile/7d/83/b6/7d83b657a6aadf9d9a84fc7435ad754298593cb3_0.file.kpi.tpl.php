<?php
/* Smarty version 4.3.4, created on 2025-03-24 18:57:18
  from '/home/u1573007/public_html/adminsite/themes/new-theme/template/helpers/kpi/kpi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67e1489e5ab186_84704322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d83b657a6aadf9d9a84fc7435ad754298593cb3' => 
    array (
      0 => '/home/u1573007/public_html/adminsite/themes/new-theme/template/helpers/kpi/kpi.tpl',
      1 => 1718342660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67e1489e5ab186_84704322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u1573007/public_html/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php echo '<script'; ?>
>
  function refresh_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,'-','_') ));?>
()
  {
    <?php if (!(isset($_smarty_tpl->tpl_vars['source']->value)) || $_smarty_tpl->tpl_vars['source']->value == '' || !(isset($_smarty_tpl->tpl_vars['refresh']->value)) || $_smarty_tpl->tpl_vars['refresh']->value == '') {?>
    if (arguments.length < 1 || arguments[0] != true) {
      // refresh kpis only if force mode is true (pass true as first argument of this function).
      return;
    }
    <?php }?>
    $.ajax({
      url: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['source']->value ));?>
' + '&rand=' + new Date().getTime(),
      dataType: 'json',
      type: 'GET',
      cache: false,
      headers: { 'cache-control': 'no-cache' },
      success: function(jsonData){
        if (!jsonData.has_errors)
        {
          if (jsonData.value != undefined)
          {
            $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value ));?>
 .value').html(jsonData.value);
            $('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value ));?>
').attr('data-original-title', jsonData.tooltip);
          }
          if (jsonData.data != undefined)
          {
            $("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value ));?>
 .boxchart svg").remove();
            set_d3_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,'-','_') ));?>
(jsonData.data);
          }
        }
      }
    });
  }
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['chart']->value) {?>
  <?php echo '<script'; ?>
>
    function set_d3_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'str_replace' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'-','_' )) ));?>
(jsonObject)
    {
      var data = new Array;
      $.each(jsonObject, function (index, value) {
        data.push(value);
      });
      var data_max = d3.max(data);

      var chart = d3.select("#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value ));?>
 .boxchart").append("svg")
              .attr("class", "data_chart")
              .attr("width", data.length * 6)
              .attr("height", 45);

      var y = d3.scale.linear()
              .domain([0, data_max])
              .range([0, data_max * 45]);

      chart.selectAll("rect")
              .data(data)
              .enter().append("rect")
              .attr("y", function(d) { return 45 - d * 45 / data_max; })
              .attr("x", function(d, i) { return i * 6; })
              .attr("width", 4)
              .attr("height", y);
    }

    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    set_d3_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( smarty_modifier_replace($_smarty_tpl->tpl_vars['id']->value,'-','_') ));?>
($.parseJSON("<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value ));?>
"));
    <?php }?>
  <?php echo '</script'; ?>
>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['href']->value)) && $_smarty_tpl->tpl_vars['href']->value) {?>
  <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" class="kpi-container box-stats">
<?php } else { ?>
  <div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" class="kpi-container box-stats">
<?php }?>
  <div class="kpi-content -<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value ));?>
" data-original-title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tooltip']->value ));?>
" data-toggle="pstooltip">
    <?php if ((isset($_smarty_tpl->tpl_vars['icon']->value)) && $_smarty_tpl->tpl_vars['icon']->value) {?>
      <i class="material-icons"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['icon']->value ));?>
</i>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['chart']->value)) && $_smarty_tpl->tpl_vars['chart']->value) {?>
      <div class="boxchart-overlay">
        <div class="boxchart">
        </div>
      </div>
    <?php }?>
    <span class="title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['title']->value ));?>
</span>
    <div class="kpi-description">
      <div class="subtitle"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subtitle']->value ));?>
</div>
      <div class="value"><?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value )),'&amp;','&');?>
</div>
    </div>
  </div>
<?php if ((isset($_smarty_tpl->tpl_vars['href']->value)) && $_smarty_tpl->tpl_vars['href']->value) {?>
  </a>
<?php } else { ?>
  </div>
<?php }?>

<?php }
}
