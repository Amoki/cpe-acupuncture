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
		$query .= " password = '$password' ";
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
	if (isset($mail)) {
		$query .= $fill;
		$query .= " email = '$mail' ";
	}

	$query .= " WHERE id = $id";
	var_dump($query);

	$res_query = $bdd ->prepare($query);
	$res_query->execute();

	$res = $res_query->fetch();

	var_dump($res);

}
?>