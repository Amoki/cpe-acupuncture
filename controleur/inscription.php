<?php

	/*Connexion à la BDD */
	try {
		$connexion = new PDO('mysql:host=localhost; dbname=acu; charset=utf8', 'root', 'root');

	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
	/* Récupération des données depuis le formulaire d'inscription */
	$email = $_POST['mail'];
	$mdp = $_POST['mdp'];
	$nom = $_POST['lastname'];
	$prenom = $_POST['name'];
	

	/* On teste l'existence de l'adresse mail dans la base de données */
	$query_test = "SELECT * FROM membre WHERE email='$email'";
	//echo $query_test.'<br/>';
	$result = $connexion ->prepare($query_test);
	$result->execute();

	if ($result ->rowCount() > 0) {
    	echo 'Cette adresse mail existe déjà';
	} 
	else {
	    $hashed_password = password_hash($mdp, PASSWORD_BCRYPT);
	    $query = 'INSERT INTO membre(nom, prenom, email, mdp) VALUES("'.$nom.'", "'.$prenom.'", "'.$email.'", "'.$hashed_password.'")';
		$req = $connexion->exec($query);

		//echo $query;
		if(! $req){
			 echo 'Erreur lors de l\'ajout de l\'utilisateur';
		}
		else{
			// Vérification des identifiants
			$query = "SELECT * FROM membre WHERE email = '$email'";
			//echo $query;
			$req = $connexion->prepare($query);
			$req->execute();

			$resultat = $req->fetch();

			$_SESSION['nom'] = $resultat['nom'];
			$_SESSION['prenom'] = $resultat['prenom'];
		}
	}

	// Vérification de la validité des informations

	// Hachage du mot de passe
	//$pass_hache = sha1($_POST['password']);

	// Insertion
	
?>
