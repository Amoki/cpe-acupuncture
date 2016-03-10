<?php
	/*Connexion à la BDD */
	try {
		$connexion = new PDO('mysql:host=localhost; dbname=acu; charset=utf8', 'root', 'root');

	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

	/* Requête SELECT */
	$query = $connexion ->prepare('SELECT * FROM patho');
	$query->execute();
	$liste_patho = array();
	$i = 0;
	while($donnees = $query->fetch()){
		$liste_patho[$i]['idP'] = $donnees['idP'];
		$liste_patho[$i]['mer'] = $donnees['mer'];
		$liste_patho[$i]['type'] = $donnees['type'];
		$liste_patho[$i]['desc'] = $donnees['desc'];
		$i++;
	} 

	require("lib/smarty/Smarty.class.php");
	
	$tpl = new Smarty();

	$tpl->assign('liste_patho', $liste_patho);

	$tpl->display("mapage.html");
?> 
