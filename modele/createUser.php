<?php
function createUser($nom, $prenom, $email, $mdp){
	include(_PATH_.'config.php');
	/* Requête SELECT */
	global $bdd;
	$hashed_password = password_hash($mdp, PASSWORD_BCRYPT, array(
		'salt' => $salt, 
	));
	$query = 'INSERT INTO membre(nom, prenom, email, mdp) VALUES(?, ?, ?, ?)';
	$req = $bdd ->prepare($query);
	$req->execute(array($nom, $prenom, $email, $hashed_password));
	return $req;
}
?>