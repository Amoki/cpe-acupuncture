<?php
try {
	$connexion = new PDO('mysql:host=localhost; dbname=acu; charset=utf8', 'root', 'root');	
} catch (Exception $e) {
	die('Erreur : '.$e->getMessage());
}
?>