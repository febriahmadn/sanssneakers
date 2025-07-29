<?php
/* Smarty version 4.3.4, created on 2025-07-25 10:14:22
  from '/home/u1573007/public_html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6882f68e0339e3_87525246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e55216a1430983dd2eba7f07b08f067c1cd38e8e' => 
    array (
      0 => '/home/u1573007/public_html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/title.tpl',
      1 => 1699415592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6882f68e0339e3_87525246 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group content_by_lang lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
 <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>inactive<?php }?>"
     data-type="title" data-lang="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Title','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4">
        <div class="input-group col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-12">
                <input type="text" name="title-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" max="100"
                       class="form-control"
                       value="<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
ob_start();
echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
$_prefixVariable3 = ob_get_clean();
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['allblock']->value[$_smarty_tpl->tpl_vars['block']->value['id_psreassurance']]['title'][$_prefixVariable3],'htmlall','UTF-8' ));
}?>">
            </div>
        </div>
        <div class="col-xs-12 help-block">
            <span class="limit_text">0</span>/100 characters
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php }
}
