<?php
/* Smarty version 3.1.39, created on 2021-11-25 19:22:40
  from '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/appearance.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619fd470b2a613_98990255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd37a6322fd039fd5a129ca7f4a2e130d49d2c614' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/appearance.tpl',
      1 => 1637862411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619fd470b2a613_98990255 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default col-lg-10 col-lg-offset-1 col-xs-12 col-xs-offset-0">
    <div class="panel-heading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize Module Design','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

    </div>

    <div class="panel-body">
        <div class="clearfix">

            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                    <div class="text-right">
                        <label class="control-label">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Icon color','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-2">
                    <div class="ps_colorpicker1"></div>
                    <input type="hidden" id="color_1" name="PSR_ICON_COLOR" class="psr_icon_color"
                           value="<?php if ((isset($_smarty_tpl->tpl_vars['psr_icon_color']->value))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psr_icon_color']->value,'htmlall','UTF-8' ));
}?>" />
                </div>

                <div class="clearfix"></div>
            </div>

            <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                    <div class="text-right">
                        <label class="control-label">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Text color','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-2">
                    <div class="ps_colorpicker2"></div>
                    <input type="hidden" id="color_2" name="PSR_TEXT_COLOR" class="psr_text_color"
                           value="<?php if ((isset($_smarty_tpl->tpl_vars['psr_text_color']->value))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psr_text_color']->value,'htmlall','UTF-8' ));
}?>" />
                </div>
            </div>

        </div>
    </div>

    <div class="panel-footer">
        <div class="col-xs-12 text-right">
            <button name="saveConfiguration" id="saveConfiguration" type="submit" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</button>
        </div>
    </div>
</div>
<?php }
}
