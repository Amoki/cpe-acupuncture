<?php
    // Initialisation de l'environnement
    include('./config_init.php');

    // Gestion de Routing
    if (isset($_GET['action']) && file_exists(_CTRL_.str_replace('.', '', $_GET['action']).'.php'))
        include(_CTRL_.$_GET['action'].'.php');

    if (isset($_GET['page']) && file_exists(_CTRL_.str_replace('.', '', $_GET['page']).'.php'))
        include(_VUE_.$_GET['page'].'.php');
    else
        include(_CTRL_.'index.php');


    $logged = false;
    $username = "";
    if (isset($_SESSION['nom']))
    {
        $logged = true;
        $username = $_SESSION['nom'].' '. $_SESSION['prenom'];
    }
    $smarty->assign('logged', $logged);
    $smarty->assign('username', $username);


    // Affichage des templates

    if (isset($_GET['page']) && file_exists(_TPL_.str_replace('.', '', $_GET['page']).'.html'))
        $smarty->display(_TPL_.$_GET['page'].'.html');
    else
        $smarty->display(_TPL_ .'index.html');
    ?>
