<?php

/*Connexion à la BDD */
global $bdd;
global $smarty;
$smarty->assign('fail', false);


/* Récupération des données depuis le formulaire d'inscription */
$email = $_POST['mail'];
$mdp = $_POST['password'];
$nom = $_POST['lastname'];
$prenom = $_POST['name'];
$email_confirm = $_POST['mail_confirm'];
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
	$query_test = "SELECT * FROM membre WHERE email = ?";
	$result = $bdd ->prepare($query_test);
	$result->execute(array($email));

	if ($result ->rowCount() > 0) {
		$smarty->assign('fail', 'Cette adresse mail est déjà utilisée');
		$_GET['page'] = 'index'; // stay on the same page
	} 
	else {
		require(_PATH_.'/modele/createUser.php');

		$res = createUser($nom, $prenom, $email, $mdp));

		if(!$res) {
			$smarty->assign('fail', "Une erreur inconnue est survenue, veuillez réessayer. Si le problème persiste, contactez l'administrateur");
			$_GET['page'] = 'index'; // stay on the same page
		}
		else{
			// récupération de l'id
			$query = "SELECT * FROM membre WHERE email = ?";
			$req = $bdd->prepare($query);
			$req->execute(array($email));

			$resultat = $req->fetch();

			$_SESSION['id'] = $resultat['id'];
			$_SESSION['nom'] = $resultat['nom'];
			$_SESSION['prenom'] = $resultat['prenom'];
		}
	}

}
?>
