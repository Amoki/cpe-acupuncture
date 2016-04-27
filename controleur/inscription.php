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
$email_confirm = $_POST['e-mail_confirm'];
$mdp_confirm = $_POST['password_confirm'];

if($email != $email_confirm){
	$smarty->assign('fail', 'Les adresses mails que vous avez saisies sont différentes. Veuillez recommencer.');
	$_GET['page'] = 'index';
}
else if($mdp != $mdp_confirm){
	$smarty->assign('fail', 'Les mots de passe que vous avez saisis sont différents. Veuillez recommencer.');
	$_GET['page'] = 'index';
}
else {
	/* On teste l'existence de l'adresse mail dans la base de données */
	$query_test = "SELECT * FROM membre WHERE email='$email'";
	//echo $query_test.'<br/>';
	$result = $bdd ->prepare($query_test);
	$result->execute();

	if ($result ->rowCount() > 0) {
		$smarty->assign('fail', 'Cette adresse mail est déjà utilisée');
	} 
	else {
		$hashed_password = password_hash($mdp, PASSWORD_BCRYPT, array(
			'salt' => $salt, 
			));
		$query = 'INSERT INTO membre(nom, prenom, email, mdp) VALUES("'.$nom.'", "'.$prenom.'", "'.$email.'", "'.$hashed_password.'")';
		$req = $bdd->exec($query);

		//echo $query;
		if(! $req){
			$smarty->assign('fail', 'Une erreur inconnue est survenue. Veuillez réessayer');
			$_GET['page'] = 'index';
		}
		else{
			// Vérification des identifiants
			$query = "SELECT * FROM membre WHERE email = '$email'";
			//echo $query;
			$req = $bdd->prepare($query);
			$req->execute();

			$resultat = $req->fetch();

			$_SESSION['nom'] = $resultat['nom'];
			$_SESSION['prenom'] = $resultat['prenom'];
		}
	}

}


	// Vérification de la validité des informations

	// Hachage du mot de passe
	//$pass_hache = sha1($_POST['password']);

	// Insertion

?>
