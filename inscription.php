<?php

	/*Connexion à la BDD */
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	try {
		$connexion = new PDO('mysql:host=localhost; dbname=acu; charset=utf8', 'root', 'root');

	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
	$email = $_POST['mail'];
	$mdp = $_POST['mdp'];
	$nom = $_POST['name'];
	$prenom = $_POST['lastname'];
	
	$query_test = "SELECT * FROM membre WHERE email='$email'";
	//echo $query_test.'<br/>';
	$result = $connexion ->prepare($query_test);
	$result->execute();

	if ($result ->rowCount() > 0) {
    	echo 'Cette adresse mail existe déjà';
	} else {
	    $query = 'INSERT INTO membre(nom, prenom, email, mdp) VALUES("'.$nom.'", "'.$prenom.'", "'.$email.'", "'.$mdp.'")';
		$req = $connexion->exec($query);

		//echo $query;
		if($req)
		echo("L'utilisateur a bien été ajouté");
		else
			 echo 'erreur lors de l\'ajout';
		}
	}

	// Vérification de la validité des informations

	// Hachage du mot de passe
	//$pass_hache = sha1($_POST['password']);

	// Insertion
	
?>