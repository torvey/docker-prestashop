<?php
/* Smarty version 3.1.39, created on 2021-11-15 00:14:37
  from '/var/www/html/admin941mg8u6g/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6191985deb38b7_57406051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb9e79c17a17dd89a89f4875e3b3fdf382231b21' => 
    array (
      0 => '/var/www/html/admin941mg8u6g/themes/default/template/content.tpl',
      1 => 1636931385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6191985deb38b7_57406051 (Smarty_Internal_Template $_smarty_tpl) {
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
