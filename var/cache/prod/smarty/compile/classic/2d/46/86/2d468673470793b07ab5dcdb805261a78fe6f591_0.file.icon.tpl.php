<?php
/* Smarty version 4.3.4, created on 2025-07-25 10:14:22
  from '/home/u1573007/public_html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6882f68e01a515_06409388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d468673470793b07ab5dcdb805261a78fe6f591' => 
    array (
      0 => '/home/u1573007/public_html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/icon.tpl',
      1 => 1699415592,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6882f68e01a515_06409388 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3 first-block">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4 first-block">
        <div class="psr_picto_showing input-group col-lg-4">
            <img class="psr-picto picto_by_module svg"
                 src="<?php if ((isset($_smarty_tpl->tpl_vars['block']->value)) && $_smarty_tpl->tpl_vars['block']->value['icon']) {
echo $_smarty_tpl->tpl_vars['block']->value['icon'];
} elseif ((isset($_smarty_tpl->tpl_vars['block']->value)) && $_smarty_tpl->tpl_vars['block']->value['custom_icon']) {
echo $_smarty_tpl->tpl_vars['block']->value['custom_icon'];
}?>"/>
            <div class="svg_chosed_here">
                <img class="image-preview-lang img-thumbnail hide" src="" alt="" width="24px" height="24px"/>
            </div>
            <div>
                <i class="material-icons">landscape</i>
            </div>
            <span class="modify_icon" data-id="<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];
}?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify icon','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</span>
        </div>
        <div class="input-group upload_file_button">
            <label class="file_label" for="file<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];
}?>" data-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or upload file','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or upload file','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</label>
            <label class="input-group-btn">
                <span>
                    <i class="icon-file"></i><input id="file<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];
}?>" class="slide_image" data-preview="image-preview-lang" type="file" name="image-lang">
                </span>
            </label>
        </div>
        <div class="help-block">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose SVG for better customization. Other allowed formats are: .gif, .jpg, .png','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php }
}
