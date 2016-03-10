<?php
	require("lib/smarty/Smarty.class.php");

	$smarty = new Smarty();

	$smarty->display("mapage.html");

	/*Initialisation de la BDD */
	try {
		$bdd = new PDO('mysql:host=localhost; dbname=acuBD; charset=utf8', 'root', 'root');

	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

	/* Requete SELECT */
	$reponse = $bdd->query('SELECT * FROM patho');
	echo '<p>DESC</p>';
	while($donnees = $reponse->fetch()){
		echo '<p>'.$donnees['desc'].'</p>';
	}

	$reponse->closeCursor();

	
?> 
