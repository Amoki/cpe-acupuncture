<?php

	/*Connexion à la BDD */
	global $bdd;
	global $smarty;
	$smarty->assign('fail', false);
	include(_PATH_.'config.php');

	/* Récupération des données depuis le formulaire d'inscription */
	$email = $_POST['mail'];
	$mdp = $_POST['mdp'];
	$nom = $_POST['lastname'];
	$prenom = $_POST['name'];
	

	/* On teste l'existence de l'adresse mail dans la base de données */
	$query_test = "SELECT * FROM membre WHERE email='$email'";
	$result = $bdd ->prepare($query_test);
	$result->execute();

	if ($result ->rowCount() > 0) {
		$smarty->assign('fail', 'Cette adresse mail est déjà utilisée');
		$_GET['page'] = 'index'; // stay on the same page
	} 
	else {
	    $hashed_password = password_hash($mdp, PASSWORD_BCRYPT, array(
	        'salt' => $salt, 
	    ));
	    $query = 'INSERT INTO membre(nom, prenom, email, mdp) VALUES("'.$nom.'", "'.$prenom.'", "'.$email.'", "'.$hashed_password.'")';
	    $req = $bdd->exec($query);

		if(! $req){
			$smarty->assign('fail', "Une erreur inconnue est survenue, veuillez réessayer. Si le problème persiste, contactez l'administrateur");
			$_GET['page'] = 'index'; // stay on the same page
		}
		else{
			// Vérification des identifiants
			$query = "SELECT * FROM membre WHERE email = '$email'";
			$req = $bdd->prepare($query);
			$req->execute();

			$resultat = $req->fetch();

			$_SESSION['id'] = $resultat['id'];
			$_SESSION['nom'] = $resultat['nom'];
			$_SESSION['prenom'] = $resultat['prenom'];
		}
	}

	// Vérification de la validité des informations

?>
