<?php 
	/*Connexion à la BDD */
	try {
		$connexion = new PDO('mysql:host=localhost; dbname=acu; charset=utf8', 'root', 'root');

	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
	/*Reception des données du formulaire */
	$email = $_POST['email'];
	$mdp = $_POST['mdp'];

	// Vérification des identifiants
	$query = "SELECT * FROM membre WHERE email = '$email' AND mdp = '$mdp'";
	//echo $query;
	$req = $connexion->prepare($query);
	$req->execute();

	$resultat = $req->fetch();

	if (!$resultat)
	{
	    echo 'Mauvais identifiant ou mot de passe !';
	}
	else
	{
	    session_start();
	    $_SESSION['nom'] = $resultat['nom'];
	    $_SESSION['prenom'] = $resultat['prenom'];
	    header('Location: index.php');
	}
?>