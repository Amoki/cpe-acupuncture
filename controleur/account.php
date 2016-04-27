<?php
	require(_PATH_.'/modele/updateInfo.php');

	if(isset($_POST['password']) && ($_POST['password'] != $_POST['retry_password']))
	{
		$smarty->assign('fail', 'Mot de passe mal saisi');
	}
	else{
		updateInfo($_SESSION['id'], $_POST['mail'], $_POST['mdp'], $_POST['lastname'], $_POST['name']);
		$_SESSION['nom'] = $_POST['lastname'];
		$_SESSION['prenom'] = $_POST['name'];

		$smarty->assign('success', 'Vos données ont bien été modifiées');
	}

?>