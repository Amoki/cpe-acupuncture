<?php
require(_PATH_.'/modele/user.php');

$user = getuserinfo($_SESSION['id']);

$smarty->assign('nom', $user['nom']);
$smarty->assign('prenom', $user['prenom']);
$smarty->assign('email', $user['email']);
?>