<?php
function getUserInfo($id){
	/* Requête SELECT */
	global $bdd;
	$rawquery = 'SELECT nom, prenom, email from membre 
				 WHERE id='.$id ;

	//echo $rawquery;
	$query = $bdd ->prepare($rawquery);

	$query->execute();
	$res = $query->fetch();

	return $res;
}
?>