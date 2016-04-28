<?php
function updateInfo($id, $mail, $password, $nom, $prenom){
	include(_PATH_.'config.php');
	global $bdd;
	$query = 'UPDATE membre SET ';

	$fill = '';
	$params = array();

	if (isset($mail)) {
		$query .= " email = ? ";
		$params[] = $mail;
		$fill = ',';

	}
	if (isset($password) && $password !='') {
		$hashed_password = password_hash($password, PASSWORD_BCRYPT, array(
			'salt' => $salt, 
		));
		$query .= $fill;
		$query .= " mdp = ? ";
		$params[] = $hashed_password;
		$fill = ',';
	}
	if (isset($nom)) {
		$query .= $fill;
		$query .= " nom = ? ";
		$params[] = $nom;
		$fill = ',';
	}
	if (isset($prenom)) {
		$query .= $fill;
		$query .= " prenom = ? ";
		$params[] = $prenom;
		$fill = ',';
	}

	$query .= " WHERE id = ?";

	$params[] = $id;
	
	$res_query = $bdd ->prepare($query);
	$res_query->execute($params);

	$res = $res_query->fetch();


}
?>