<?php
	include(_PATH_.'/modele/query_advancedSearch.php');
	
	var_dump($_POST);

	if (!isset($_POST["meridien"]) || $_POST["meridien"]=="")
	{
		$_POST["meridien"] = "default";
	}
	if (!isset($_POST["type_patho"]) || $_POST["type_patho"]=="")
	{
		$_POST["type_patho"] = "default";
	}
	if (!isset($_POST["cbCaract"]) || $_POST["cbCaract"]=="")
	{
		$_POST["cbCaract"] = "default";
	}
	if (!isset($_POST["mot_patho"]) || $_POST["mot_patho"]=="")
	{
		$_POST["mot_patho"] = "default";
	}
	else
	{
		$_POST["mot_patho"]=explode(", ", $_POST["mot_patho"]);
	}
	if (!isset($_POST["symptomes"]) || $_POST["symptomes"]=="")
	{
		$_POST["symptomes"] = "default";
	}
	else
	{
		$_POST["symptomes"]=explode(", ", $_POST["symptomes"]);
	}

	$liste_patho = advancedSearch($_POST["meridien"],$_POST["type_patho"],$_POST["cbCaract"], $_POST["symptomes"], $_POST["mot_patho"]);

	$smarty->assign("liste_patho" , $liste_patho);
?>
