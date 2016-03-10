<?php
function smarty_function_note_qcm($params, &$smarty){
    if (empty($params['note'])) {
        $smarty->_trigger_fatal_error("[plugin] le paramètre 'note' est vide");
        return;
    }
    switch ($params['note']) // On indique sur quelle variable on travaille
    { 
        case 0: // Dans le cas où $note vaut 0
        return "Tu es vraiment un gros Zéro !";
        break;

        case 1: // Dans le cas où $note vaut 0
        return "Tu es vraiment un gros Zéro !";
        break;

        case 5: // Dans le cas où $note vaut 5
        return "Tu es très mauvais.";
        break;

        case 7: // Dans le cas où $note vaut 7
        return "Tu es mauvais.";
        break;

        case 10: // Etc.
        return "Tu as pile poil la moyenne, c'est un peu juste...";
        break;

        case 12:
        return "Tu es assez bon.";
        break;

        case 16:
        return "Tu te débrouilles très bien !";
        break;

        case 20:
        return "Excellent travail, c'est parfait !";
        break;

        default:
        return "Désolé, je n'ai pas de message à afficher pour cette note.";
    }
}
?>