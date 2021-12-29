<?php
/* Smarty version 3.1.34-dev-7, created on 2021-12-24 09:05:24
  from 'app:controllersgridgridBodyPa' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_61c57f44c61e12_85453572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f6b69b5c7774a6a26b499be26b868731c8b469' => 
    array (
      0 => 'app:controllersgridgridBodyPa',
      1 => 1612563757,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61c57f44c61e12_85453572 (Smarty_Internal_Template $_smarty_tpl) {
?><tbody>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
		<?php echo $_smarty_tpl->tpl_vars['row']->value;?>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<tr></tr>
</tbody>

<?php }
}
