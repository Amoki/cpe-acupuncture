<?php
	include(_PATH_.'/modele/query_meridListName.php');

	$smarty->assign('liste_merid', meridListName());
?>
