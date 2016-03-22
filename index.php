 <?php
 /*Mise à jour des variables de session */
	session_start();

    $logged = false;
    $username = "";
	if (isset($_SESSION['nom']))
	{
	    $logged = true;
        $username = $_SESSION['nom'].' '. $_SESSION['prenom'];
	}
	 

    require("lib/smarty/Smarty.class.php");

    $tpl = new Smarty();

    $tpl->assign('logged', $logged);
    $tpl->assign('username', $username);

    $tpl->display("pages/recherche-avancee.html");
?> 
