<?php
/* Smarty version 3.1.30-dev/53, created on 2016-03-10 16:46:20
  from "/Applications/MAMP/htdocs/cpe-acupuncture/mapage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30-dev/53',
  'unifunc' => 'content_56e196ccc4eaa1_60748312',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6f065ffd8deefe5af097e49d5bbdfa8d765a766' => 
    array (
      0 => '/Applications/MAMP/htdocs/cpe-acupuncture/mapage.html',
      1 => 1457624779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e196ccc4eaa1_60748312 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_note_qcm')) require_once '/Applications/MAMP/htdocs/cpe-acupuncture/lib/smarty/plugins/function.note_qcm.php';
?>
<html>
<head>
	<meta charset='utf-8'>
	<title>Ma page de test</title>
</head>
<body>
	<?php echo smarty_function_note_qcm(array('note'=>"1"),$_smarty_tpl);?>

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
</html><?php }
}
