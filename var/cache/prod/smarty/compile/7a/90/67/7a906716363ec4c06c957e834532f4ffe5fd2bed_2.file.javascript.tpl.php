<?php
/* Smarty version 4.3.4, created on 2025-03-14 22:26:22
  from '/home/u1573007/public_html/modules/paypal/views/templates/_partials/javascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d44a9e6a83c2_52344550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a906716363ec4c06c957e834532f4ffe5fd2bed' => 
    array (
      0 => '/home/u1573007/public_html/modules/paypal/views/templates/_partials/javascript.tpl',
      1 => 1736908582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67d44a9e6a83c2_52344550 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
 <?php if ((isset($_smarty_tpl->tpl_vars['JSvars']->value))) {?>
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSvars']->value, 'varValue', false, 'varName');
$_smarty_tpl->tpl_vars['varValue']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['varName']->value => $_smarty_tpl->tpl_vars['varValue']->value) {
$_smarty_tpl->tpl_vars['varValue']->do_else = false;
?>
       <?php $_smarty_tpl->_assignInScope('isNotJSVarsvalue', ($_smarty_tpl->tpl_vars['varName']->value == '0' && $_smarty_tpl->tpl_vars['varValue']->value == '1'));?>
       <?php if ($_smarty_tpl->tpl_vars['isNotJSVarsvalue']->value === false) {?>
           var <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['varName']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['varValue']->value ));?>
;
       <?php }?>
   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 <?php }
echo '</script'; ?>
>

<?php if ((isset($_smarty_tpl->tpl_vars['JSscripts']->value)) && is_array($_smarty_tpl->tpl_vars['JSscripts']->value) && false === empty($_smarty_tpl->tpl_vars['JSscripts']->value)) {?>
  <?php echo '<script'; ?>
>
      function init() {
          if (document.readyState == 'complete') {
              addScripts();
          } else {
              document.addEventListener('readystatechange', function () {
                  if (document.readyState == 'complete') {
                      addScripts();
                  }
              })
          }

          function addScripts() {
              var scripts = Array();
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSscripts']->value, 'JSscriptAttributes', false, 'keyScript');
$_smarty_tpl->tpl_vars['JSscriptAttributes']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['keyScript']->value => $_smarty_tpl->tpl_vars['JSscriptAttributes']->value) {
$_smarty_tpl->tpl_vars['JSscriptAttributes']->do_else = false;
?>
              var script = document.querySelector('script[data-key="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['keyScript']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"]');

              if (null == script) {
                  var newScript = document.createElement('script');
                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['JSscriptAttributes']->value, 'attrVal', false, 'attrName');
$_smarty_tpl->tpl_vars['attrVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attrName']->value => $_smarty_tpl->tpl_vars['attrVal']->value) {
$_smarty_tpl->tpl_vars['attrVal']->do_else = false;
?>
                  newScript.setAttribute('<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['attrName']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
', '<?php echo $_smarty_tpl->tpl_vars['attrVal']->value;?>
');
                  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                  if (false === ('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['keyScript']->value, ENT_QUOTES, 'UTF-8');?>
'.search('jq-lib') === 0 && typeof jQuery === 'function')) {
                      newScript.setAttribute('data-key', '<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['keyScript']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
');
                      scripts.push(newScript);
                  }
              }
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

              scripts.forEach(function (scriptElement) {
                  document.body.appendChild(scriptElement);
              })
          };
      };
      init();

  <?php echo '</script'; ?>
>

<?php }?>

<?php }
}
