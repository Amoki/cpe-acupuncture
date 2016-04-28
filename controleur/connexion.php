<?php 
	/*Connexion à la BDD */
	global $bdd;

	/*Reception des données du formulaire */
	$email = $_POST['email'];
	$mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT, array(
		'salt' => $salt, 
	));

	// Vérification des identifiants
	$query = "SELECT * FROM membre WHERE email = ? AND mdp = ?";

	$req = $bdd->prepare($query);
	$req->execute(array($email, $mdp));

	$resultat = $req->fetch();

	if (!$resultat)
	{
		$smarty->assign('fail', 'Identifiant ou mot de passe inconnu');
		$_GET['page'] = 'index';
	}
	else
	{
		$_SESSION['id'] = $resultat['id'];
	    $_SESSION['nom'] = $resultat['nom'];
	    $_SESSION['prenom'] = $resultat['prenom'];
	}
?>
