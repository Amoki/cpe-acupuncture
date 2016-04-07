<?php 
	/*Connexion à la BDD */
	global $bdd;

	/*Reception des données du formulaire */
	$email = $_POST['email'];
	$mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT, array(
	        'salt' => $salt, 
	    ));

	// Vérification des identifiants
	$query = "SELECT * FROM membre WHERE email = '$email' AND mdp = '$mdp'";
	//echo $query;
	var_dump($query);
	$req = $bdd->prepare($query);
	$req->execute();

	$resultat = $req->fetch();

	if (!$resultat)
	{
		
	}
	else
	{
		$_SESSION['id'] = $resultat['id'];
	    $_SESSION['nom'] = $resultat['nom'];
	    $_SESSION['prenom'] = $resultat['prenom'];
	}
?>
