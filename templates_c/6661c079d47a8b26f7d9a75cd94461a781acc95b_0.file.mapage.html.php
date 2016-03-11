<?php
/* Smarty version 3.1.30-dev/53, created on 2016-03-10 16:50:02
  from "/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/mapage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_56e197aa2073b6_29387125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6661c079d47a8b26f7d9a75cd94461a781acc95b' => 
    array (
      0 => '/Users/Margaux/Documents/CPE/TLI/cpe-acupuncture/mapage.html',
      1 => 1457624293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e197aa2073b6_29387125 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<meta charset='utf-8'>
	<title>Ma page de test</title>
</head>
<body>

	<table>
		<thead>
			<tr>
				<th>meridien</th>
				<th>type</th>
				<th>desc</th>
			</tr>
		</thead>
		<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste_patho']->value, 'patho');
foreach ($_from as $_smarty_tpl->tpl_vars['patho']->value) {
$_smarty_tpl->tpl_vars['patho']->_loop = true;
$__foreach_patho_0_saved = $_smarty_tpl->tpl_vars['patho'];
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['patho']->value['mer'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['patho']->value['type'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['patho']->value['desc'];?>
</td>

			</tr>
			<?php
$_smarty_tpl->tpl_vars['patho'] = $__foreach_patho_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
		</tbody>
	</table>
</body>
</html>

<vjlsvjlks><?php }
}
