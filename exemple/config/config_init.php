<?php
// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require('defines.inc.php');
require(_PATH_ . 'web/tools/smarty/Smarty.class.php');

// Chargement du coeur
$files = scandir(_CORE_);
foreach ($files as $filename)
{
    if (is_file(_CORE_.$filename))
        require_once(_CORE_.$filename);
}

// Connexion Database
try {
$bdd = new PDO("mysql:host=localhost;dbname=acu", "root", "root");
/* Sous Windows décommenter cette ligne et commenter celle du dessus
$bdd = new PDO("mysql:host=localhost;dbname=acu", "root", "");
*/
$bdd->query("SET NAMES UTF8");
} catch (Exception $e) {
    echo "Problème de connexion à la base de donnée acu...";
    die();
}

// Initialisation Smarty
$smarty = new Smarty();

?>