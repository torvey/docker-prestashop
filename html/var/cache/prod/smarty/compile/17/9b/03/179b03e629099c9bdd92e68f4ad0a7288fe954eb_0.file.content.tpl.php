<?php
/* Smarty version 3.1.39, created on 2021-11-18 19:36:35
  from '/var/www/html/admin52450iqko/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61969d3362ca30_87608213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '179b03e629099c9bdd92e68f4ad0a7288fe954eb' => 
    array (
      0 => '/var/www/html/admin52450iqko/themes/new-theme/template/content.tpl',
      1 => 1637259283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61969d3362ca30_87608213 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}