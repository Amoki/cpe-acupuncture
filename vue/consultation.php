<?php
	include(_PATH_.'/modele/query_listPathSympt.php');

	$smarty->assign('liste_patho', listPathSympt());
?>