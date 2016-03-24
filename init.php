<?php
require('config.php');
require(_PATH_ . 'lib/smarty/Smarty.class.php');

// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

// Si on a pas ces infos, rien ne peut fonctionner : die
if (!isset($_SERVER['DOCUMENT_ROOT']))
    die();


// Define du dossier des Controleurs
define('_CTRL_', _PATH_ . 'controleur/');

// Define du dossier des Configs
define('_CONFIG_', _PATH_ . 'config/');

// Define du dossier des TPL
define('_TPL_', _PATH_ . 'template/');

// Define du dossier des VUES
define('_VUE_', _PATH_ . 'vue/');


// Connexion Database
try {
		
	$bdd = new PDO($mysql_string, $mysql_user, $mysql_password);

	$bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la base de donnée acu...";
    die();
}

// Initialisation Smarty
$smarty = new Smarty();

?>

