<?php
function updateInfo($id, $mail, $password, $nom, $prenom){
	global $bdd;
	$query = 'UPDATE membre SET ';

	$fill = '';
	$params = array();

	if (isset($mail)) {
		$query .= " email = ? ";
		array_push($param, $mail);
		$fill = ',';

	}
	if (isset($password) && $password !='') {
		$query .= $fill;
		$query .= " mdp = ? ";
		array_push($param, $password);
		$fill = ',';
	}
	if (isset($nom)) {
		$query .= $fill;
		$query .= " nom = ? ";
		array_push($param, $nom);
		$fill = ',';
	}
	if (isset($prenom)) {
		$query .= $fill;
		$query .= " prenom = ? ";
		array_push($param, $prenom);
		$fill = ',';
	}

	$query .= " WHERE id = ?";

	array_push($param, $id);

	$res_query = $bdd ->prepare($query);
	$res_query->execute($param);

	$res = $res_query->fetch();


}
?>