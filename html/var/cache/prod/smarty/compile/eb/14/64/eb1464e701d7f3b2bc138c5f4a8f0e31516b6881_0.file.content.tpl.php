<?php
/* Smarty version 3.1.39, created on 2021-11-18 19:38:59
  from '/var/www/html/admin52450iqko/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61969dc3169725_10272137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb1464e701d7f3b2bc138c5f4a8f0e31516b6881' => 
    array (
      0 => '/var/www/html/admin52450iqko/themes/default/template/content.tpl',
      1 => 1637259283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61969dc3169725_10272137 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
