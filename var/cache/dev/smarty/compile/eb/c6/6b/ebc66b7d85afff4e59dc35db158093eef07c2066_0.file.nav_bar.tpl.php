<?php
/* Smarty version 4.3.4, created on 2025-02-16 12:06:16
  from '/home/u1573007/public_html/adminsite/themes/new-theme/template/components/layout/nav_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67b172489ebba5_53753818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebc66b7d85afff4e59dc35db158093eef07c2066' => 
    array (
      0 => '/home/u1573007/public_html/adminsite/themes/new-theme/template/components/layout/nav_bar.tpl',
      1 => 1718342660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67b172489ebba5_53753818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u1573007/public_html/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<nav class="nav-bar d-none d-print-none d-md-block">
  <span class="menu-collapse" data-toggle-url="<?php echo $_smarty_tpl->tpl_vars['toggle_navigation_url']->value;?>
">
    <i class="material-icons rtl-flip">chevron_left</i>
    <i class="material-icons rtl-flip">chevron_left</i>
  </span>

  <div class="nav-bar-overflow">
      <div class="logo-container">
          <a id="header_logo" class="logo float-left" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_tab_link']->value,'html','UTF-8' ));?>
"></a>
          <span id="shop_version" class="header-version"><?php echo $_smarty_tpl->tpl_vars['ps_version']->value;?>
</span>
      </div>

      <ul class="main-menu<?php if ($_smarty_tpl->tpl_vars['collapse_menu']->value) {?> sidebar-closed<?php }?>">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'level1');
$_smarty_tpl->tpl_vars['level1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['level1']->value) {
$_smarty_tpl->tpl_vars['level1']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['level1']->value['active']) {?>

          <?php $_smarty_tpl->_assignInScope('level1Href', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level1']->value['href'],'html','UTF-8' )));?>
          <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['level1']->value['sub_tabs']) && (isset($_smarty_tpl->tpl_vars['level1']->value['sub_tabs'][0]['href']))) {?>
            <?php $_smarty_tpl->_assignInScope('level1Href', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level1']->value['sub_tabs'][0]['href'],'html','UTF-8' )));?>
          <?php }?>

          <?php $_smarty_tpl->_assignInScope('level1Name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level1']->value['name'],'html','UTF-8' )));?>
          <?php if ($_smarty_tpl->tpl_vars['level1']->value['name'] == '') {?>
            <?php $_smarty_tpl->_assignInScope('level1Name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level1']->value['class_name'],'html','UTF-8' )));?>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['level1']->value['icon'] != '') {?>

            <li class="link-levelone<?php if ($_smarty_tpl->tpl_vars['level1']->value['current']) {?> link-levelone-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level1']->value['id_tab'];?>
" id="tab-<?php echo $_smarty_tpl->tpl_vars['level1']->value['class_name'];?>
">
              <a href="<?php echo $_smarty_tpl->tpl_vars['level1Href']->value;?>
" class="link" >
                <i class="material-icons"><?php echo $_smarty_tpl->tpl_vars['level1']->value['icon'];?>
</i> <span><?php echo $_smarty_tpl->tpl_vars['level1Name']->value;?>
</span>
              </a>
            </li>

          <?php } else { ?>

            <li class="category-title<?php if ($_smarty_tpl->tpl_vars['level1']->value['current']) {?> link-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level1']->value['id_tab'];?>
" id="tab-<?php echo $_smarty_tpl->tpl_vars['level1']->value['class_name'];?>
">
                <span class="title"><?php echo $_smarty_tpl->tpl_vars['level1Name']->value;?>
</span>
            </li>

              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level1']->value['sub_tabs'], 'level2');
$_smarty_tpl->tpl_vars['level2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['level2']->value) {
$_smarty_tpl->tpl_vars['level2']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['level2']->value['active']) {?>

                  <?php $_smarty_tpl->_assignInScope('level2Href', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level2']->value['href'],'html','UTF-8' )));?>

                  <?php $_smarty_tpl->_assignInScope('level2Name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level2']->value['name'],'html','UTF-8' )));?>
                  <?php if ($_smarty_tpl->tpl_vars['level2']->value['name'] == '') {?>
                    <?php $_smarty_tpl->_assignInScope('level2Name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level2']->value['class_name'],'html','UTF-8' )));?>
                  <?php }?>
                  <?php $_smarty_tpl->_assignInScope('levelOneClass', '');?>

                  <?php if ($_smarty_tpl->tpl_vars['level2']->value['current'] && !$_smarty_tpl->tpl_vars['collapse_menu']->value) {?>
                      <?php $_smarty_tpl->_assignInScope('levelOneClass', " link-active open ul-open");?>
                  <?php } elseif ($_smarty_tpl->tpl_vars['level2']->value['current'] && $_smarty_tpl->tpl_vars['collapse_menu']->value) {?>
                      <?php $_smarty_tpl->_assignInScope('levelOneClass', " link-active");?>
                  <?php }?>

                  <li class="link-levelone<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['level2']->value['sub_tabs'])) {?> has_submenu<?php }
echo $_smarty_tpl->tpl_vars['levelOneClass']->value;?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level2']->value['id_tab'];?>
" id="subtab-<?php echo $_smarty_tpl->tpl_vars['level2']->value['class_name'];?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['level2Href']->value;?>
" class="link">
                      <i class="material-icons mi-<?php echo $_smarty_tpl->tpl_vars['level2']->value['icon'];?>
"><?php echo $_smarty_tpl->tpl_vars['level2']->value['icon'];?>
</i>
                      <span>
                      <?php echo $_smarty_tpl->tpl_vars['level2Name']->value;?>

                      </span>
                        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['level1']->value['sub_tabs'])) {?>
                            <i class="material-icons sub-tabs-arrow">
                                <?php if ($_smarty_tpl->tpl_vars['level2']->value['current']) {?>
                                    keyboard_arrow_up
                                <?php } else { ?>
                                    keyboard_arrow_down
                                <?php }?>
                            </i>
                        <?php }?>
                    </a>
                      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['level2']->value['sub_tabs'])) {?>
                        <ul id="collapse-<?php echo $_smarty_tpl->tpl_vars['level2']->value['id_tab'];?>
" class="submenu panel-collapse">
                          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['level2']->value['sub_tabs'], 'level3');
$_smarty_tpl->tpl_vars['level3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['level3']->value) {
$_smarty_tpl->tpl_vars['level3']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['level3']->value['active']) {?>

                              <?php $_smarty_tpl->_assignInScope('level3Href', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level3']->value['href'],'html','UTF-8' )));?>

                              <?php $_smarty_tpl->_assignInScope('level3Name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level3']->value['name'],'html','UTF-8' )));?>
                              <?php if ($_smarty_tpl->tpl_vars['level3']->value['name'] == '') {?>
                                <?php $_smarty_tpl->_assignInScope('level3Name', call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['level3']->value['class_name'],'html','UTF-8' )));?>
                              <?php }?>

                              <li class="link-leveltwo<?php if ($_smarty_tpl->tpl_vars['level3']->value['current']) {?> link-active<?php }?>" data-submenu="<?php echo $_smarty_tpl->tpl_vars['level3']->value['id_tab'];?>
" id="subtab-<?php echo $_smarty_tpl->tpl_vars['level3']->value['class_name'];?>
">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['level3Href']->value;?>
" class="link"> <?php echo $_smarty_tpl->tpl_vars['level3Name']->value;?>

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
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAdminNavBarBeforeEnd'),$_smarty_tpl ) );?>

</nav>
<?php }
}
