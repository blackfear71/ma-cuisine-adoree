<?php
    /*******************
    ***** Recettes *****
    ********************
    Fonctionnalités :
    - TODO
    *******************/

    // Fonctions communes
    include_once('../../includes/functions/metier_commun.php');
    // include_once('../../includes/functions/physique_commun.php');

    // Contrôles communs
    // controlsIndex();

    // Modèle de données
    include_once('modele/metier_recettes.php');
    // include_once('modele/controles_recettes.php');
    // include_once('modele/physique_recettes.php');

    // Appels métier
    switch ($_GET['action'])
    {
        case 'goConsulter':
            // Récupération du menu
            $menu = getMenu(false);
            break;

        default:
            // Contrôle action renseignée URL
            header('location: recettes.php?action=goConsulter');
            break;
    }

    // Traitements de sécurité avant la vue
    switch ($_GET['action'])
    {
        case 'goConsulter':
            foreach ($menu as &$lienMenu)
            {
                $lienMenu = Menu::secureData($lienMenu);
            }

            unset($lienMenu);
            break;

        default:
            break;
    }

    // Redirection affichage
    switch ($_GET['action'])
    {
        case 'goConsulter':
        default:
            include_once('vue/vue_recettes.php');
            break;
    }
?>