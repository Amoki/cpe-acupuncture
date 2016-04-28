<?php
function updateInfo($id, $mail, $password, $nom, $prenom){
	global $bdd;
	$query = 'UPDATE membre SET ';

	$fill = '';

	if (isset($mail)) {
		$query .= " email = '$mail' ";
		$fill = ',';

	}
	if (isset($password) && $password !='') {
		$query .= $fill;
		$query .= " mdp = '$password' ";
		$fill = ',';
	}
	if (isset($nom)) {
		$query .= $fill;
		$query .= " nom = '$nom' ";
		$fill = ',';
	}
	if (isset($prenom)) {
		$query .= $fill;
		$query .= " prenom = '$prenom' ";
		$fill = ',';
	}


	$query .= " WHERE id = $id";

	$res_query = $bdd ->prepare($query);
	$res_query->execute();

	$res = $res_query->fetch();


}
?>