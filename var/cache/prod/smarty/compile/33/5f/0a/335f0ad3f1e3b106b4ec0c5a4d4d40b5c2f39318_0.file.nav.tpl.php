<?php
/* Smarty version 4.3.4, created on 2025-03-19 18:24:07
  from '/home/u1573007/public_html/adminsite/themes/default/template/nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67daa957928066_87161883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '335f0ad3f1e3b106b4ec0c5a4d4d40b5c2f39318' => 
    array (
      0 => '/home/u1573007/public_html/adminsite/themes/default/template/nav.tpl',
      1 => 1718342660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67daa957928066_87161883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u1573007/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<nav class="nav-bar" role="navigation" id="nav-sidebar">
	<span class="menu-collapse" data-toggle-url="<?php echo $_smarty_tpl->tpl_vars['toggle_navigation_url']->value;?>
">
		<i class="material-icons rtl-flip">chevron_left</i>
		<i class="material-icons rtl-flip">chevron_left</i>
	</span>

  <div class="nav-bar-overflow">
      <ul class="main-menu<?php if ($_smarty_tpl->tpl_vars['collapse_menu']->value) {?> sidebar-closed<?php }?>">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'level_1');
$_smarty_tpl->tpl_vars['level_1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['level_1']->value) {
$_smarty_tpl->tpl_vars['level_1']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['level_1']->value['active']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['level_1']->value['class_name'] == 'AdminDashboard') {?>
            <li class="link-levelone<?php if ($_smarty_tpl->tpl_vars['level_1']->value['current']) {?> link-active<?php }?>" id="tab-<?php echo $_smarty_tpl->tpl_vars['level_1']->value['class_name'];?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level_1']->value['id_tab'];?>
">
              <a href="<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['level_1']->value['sub_tabs']) && (isset($_smarty_tpl->tpl_vars['level_1']->value['sub_tabs'][0]['href']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_1']->value['sub_tabs'][0]['href'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_1']->value['href'],'html','UTF-8' ));
}?>" class="link" >
                <i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['level_1']->value['icon'];?>
</i>
                <span><?php if ($_smarty_tpl->tpl_vars['level_1']->value['name'] == '') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_1']->value['class_name'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_1']->value['name'],'html','UTF-8' ));
}?></span>
              </a>
            </li>
          <?php } else { ?>
            <li class="category-title<?php if ($_smarty_tpl->tpl_vars['level_1']->value['current']) {?> link-active<?php }?>" id="tab-<?php echo $_smarty_tpl->tpl_vars['level_1']->value['class_name'];?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level_1']->value['id_tab'];?>
">
              <span class="title">
                <span><?php if ($_smarty_tpl->tpl_vars['level_1']->value['name'] == '') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_1']->value['class_name'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_1']->value['name'],'html','UTF-8' ));
}?></span>
              </span>
            </li>

            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['level_1']->value['sub_tabs'])) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level_1']->value['sub_tabs'], 'level_2');
$_smarty_tpl->tpl_vars['level_2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['level_2']->value) {
$_smarty_tpl->tpl_vars['level_2']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['level_2']->value['active']) {?>
                  <?php $_smarty_tpl->_assignInScope('mainTabClass', '');?>

                  <?php if ($_smarty_tpl->tpl_vars['level_2']->value['current'] && !$_smarty_tpl->tpl_vars['collapse_menu']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('mainTabClass', " link-active open ul-open");?>
                  <?php } elseif ($_smarty_tpl->tpl_vars['level_2']->value['current'] && $_smarty_tpl->tpl_vars['collapse_menu']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('mainTabClass', " link-active");?>
                  <?php }?>
                  <li class="link-levelone<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['level_2']->value['sub_tabs'])) {?> has_submenu<?php }
echo $_smarty_tpl->tpl_vars['mainTabClass']->value;?>
" id="subtab-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_2']->value['class_name'],'html','UTF-8' ));?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level_2']->value['id_tab'];?>
">
                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_2']->value['href'],'html','UTF-8' ));?>
" class="link">
                      <i class="material-icons mi-<?php echo $_smarty_tpl->tpl_vars['level_2']->value['icon'];?>
"><?php echo $_smarty_tpl->tpl_vars['level_2']->value['icon'];?>
</i>
                      <span>
                        <?php if ($_smarty_tpl->tpl_vars['level_2']->value['name'] == '') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_2']->value['class_name'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_2']->value['name'],'html','UTF-8' ));
}?>
                      </span>
                      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['level_2']->value['sub_tabs'])) {?>
                        <i class="material-icons sub-tabs-arrow">
                          <?php if ($_smarty_tpl->tpl_vars['level_2']->value['current']) {?>
                            keyboard_arrow_up
                          <?php } else { ?>
                            keyboard_arrow_down
                          <?php }?>
                        </i>
                      <?php }?>
                    </a>

                    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['level_2']->value['sub_tabs'])) {?>
                      <ul id="collapse-<?php echo $_smarty_tpl->tpl_vars['level_2']->value['id_tab'];?>
" class="submenu panel-collapse">

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level_2']->value['sub_tabs'], 'level_3');
$_smarty_tpl->tpl_vars['level_3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['level_3']->value) {
$_smarty_tpl->tpl_vars['level_3']->do_else = false;
?>
                          <?php if ($_smarty_tpl->tpl_vars['level_3']->value['active']) {?>
                            <li class="link-leveltwo<?php if ($_smarty_tpl->tpl_vars['level_3']->value['current']) {?> link-active<?php }?>" id="subtab-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_3']->value['class_name'],'html','UTF-8' ));?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level_3']->value['id_tab'];?>
">
                              <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_3']->value['href'],'html','UTF-8' ));?>
" class="link">
                                <?php if ($_smarty_tpl->tpl_vars['level_3']->value['name'] == '') {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_3']->value['class_name'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level_3']->value['name'],'html','UTF-8' ));
}?>
                              </a>
                            </li>
                          <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </ul>
                    <?php }?>
                  </li>
                <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
          <?php }?>
        <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminNavBarBeforeEnd'),$_smarty_tpl ) );?>

  </div>
	</nav>
<?php }
}
