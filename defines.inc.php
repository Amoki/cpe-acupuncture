<?php

// Si on a pas ces infos, rien ne peut fonctionner : die
if (!isset($_SERVER['DOCUMENT_ROOT']))
    die();

// Define de la racine du site
define('_PATH_', $_SERVER['DOCUMENT_ROOT'].'/cpe-acupuncture/');


// Define du dossier des Controleurs
define('_CTRL_', _PATH_ . 'controleur/');

// Define du dossier des Configs
define('_CONFIG_', _PATH_ . 'config/');

// Define du dossier des TPL
define('_TPL_', _PATH_ . 'template/');

?>